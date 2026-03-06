<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:100'],
            'email'        => ['required', 'email', 'max:150'],
            'subject'      => ['required', 'string', 'max:200'],
            'enquiry_type' => ['nullable', 'string', 'in:support,sales,general,partnership,other'],
            'message'      => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::to('office@liberu.co.uk')->send(new ContactMail($validated));
        } catch (\Exception $e) {
            return redirect()->route('contact')
                ->withInput()
                ->with('error', 'Sorry, we were unable to send your message. Please try contacting us directly at support@liberu.co.uk.');
        }

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message. We will be in touch shortly.');
    }
}
