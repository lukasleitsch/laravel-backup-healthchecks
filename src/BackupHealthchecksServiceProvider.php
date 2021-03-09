<?php

namespace Leitsch\BackupHealthchecks;

use Illuminate\Support\ServiceProvider;
use Leitsch\BackupHealthchecks\Providers\EventServiceProvider;

class BackupHealthchecksServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/backup-healthchecks.php', 'backup-healthchecks'
        );

        $this->app->register(EventServiceProvider::class);
    }
}
