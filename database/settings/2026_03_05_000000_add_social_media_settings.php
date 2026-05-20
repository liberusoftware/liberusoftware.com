<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.whatsapp_url', 'https://wa.me/+441793200950');
        $this->migrator->add('site.instagram_url', 'https://www.instagram.com/liberusoftware');
        $this->migrator->add('site.linkedin_url', 'https://www.linkedin.com/company/liberugroup');
    }

    public function down(): void
    {
        $this->migrator->delete('site.whatsapp_url');
        $this->migrator->delete('site.instagram_url');
        $this->migrator->delete('site.linkedin_url');
    }
};
