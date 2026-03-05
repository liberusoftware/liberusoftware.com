<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.whatsapp_url', null);
        $this->migrator->add('site.instagram_url', null);
        $this->migrator->add('site.linkedin_url', null);
    }

    public function down(): void
    {
        $this->migrator->delete('site.whatsapp_url');
        $this->migrator->delete('site.instagram_url');
        $this->migrator->delete('site.linkedin_url');
    }
};
