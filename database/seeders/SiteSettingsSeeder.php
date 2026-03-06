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
        $settings->site_address = 'Liberu Group Ltd, 15 Commercial Road, Swindon, Wiltshire, United Kingdom SN1 5NF';
        $settings->footer_copyright = '© ' . date('Y') . ' Liberu Group Ltd. All Rights Reserved.';
        $settings->site_country = 'United Kingdom';
        $settings->site_email = 'info@liberurealestate.com';
        $settings->whatsapp_url = 'https://wa.me/+441793200950';
        $settings->youtube_url = 'https://www.youtube.com/@liberusoftware';
        $settings->facebook_url = 'https://www.facebook.com/liberusoftware';
        $settings->instagram_url = 'https://www.instagram.com/liberusoftware';
        $settings->twitter_url = 'https://x.com/liberusoftware';
        $settings->linkedin_url = 'https://www.linkedin.com/company/liberugroup';
        $settings->github_url = 'https://www.github.com/liberusoftware';

        if (method_exists($settings, 'save')) {
            $settings->save();
        }
    }
}