<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Settings\SiteSettings;

class SiteSettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = app(SiteSettings::class);
        $settings->site_name = config('app.name', 'Liberu Real Estate');
        $settings->site_currency = '£';
        $settings->site_default_language = 'en';
        $settings->site_address = '123 Real Estate St, London, UK';
        $settings->site_country = 'United Kingdom';
        $settings->site_email = 'info@liberurealestate.com';
        $settings->whatsapp_url = null;
        $settings->youtube_url = null;
        $settings->facebook_url = null;
        $settings->instagram_url = null;
        $settings->twitter_url = null;
        $settings->linkedin_url = null;
        $settings->github_url = null;

        if (method_exists($settings, 'save')) {
            $settings->save();
        }
    }
}