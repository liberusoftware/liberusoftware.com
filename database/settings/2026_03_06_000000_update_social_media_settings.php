<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->update('site.github_url', fn () => 'https://www.github.com/liberusoftware');
        $this->migrator->update('site.youtube_url', fn () => 'https://www.youtube.com/@liberusoftware');
        $this->migrator->update('site.facebook_url', fn () => 'https://www.facebook.com/liberusoftware');
        $this->migrator->update('site.twitter_url', fn () => 'https://x.com/liberusoftware');
    }

    public function down(): void
    {
        $this->migrator->update('site.github_url', fn () => 'https://github.com/liberusoftware/boilerplate-laravel');
        $this->migrator->update('site.youtube_url', fn () => null);
        $this->migrator->update('site.facebook_url', fn () => null);
        $this->migrator->update('site.twitter_url', fn () => null);
    }
};
