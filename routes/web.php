<?php

use App\Http\Controllers\ContactController;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\TeamInvitationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('welcome'))->name('home');

// Static pages
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/privacy-policy', fn () => view('privacy-policy'))->name('privacy-policy');
Route::get('/terms', fn () => view('terms'))->name('terms');

// Contact form
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Theme demo page
Route::get('/theme-demo', fn () => view('theme-demo'))->name('theme.demo');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/chat', fn () => view('chat'))->name('chat');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/messages', function () {
        return view('messages.index');
    })->name('messages.index');

    Route::get('/messages/{user}', function ($userId) {
        $user = \App\Models\User::findOrFail($userId);
        return view('messages.show', compact('user'));
    })->name('messages.show');
});

Route::get('/team-invitations/{invitation}', [TeamInvitationController::class, 'accept'])
    ->middleware(['signed', 'verified', 'auth', AuthenticateSession::class])
    ->name('team-invitations.accept');

require __DIR__.'/socialstream.php';
