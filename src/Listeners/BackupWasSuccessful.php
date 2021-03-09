<?php

namespace Leitsch\BackupHealthchecks\Listeners;

use Illuminate\Support\Facades\Http;
use Spatie\Backup\Events\BackupWasSuccessful as BackupWasSuccessfulEvent;

class BackupWasSuccessful
{
    public function handle(BackupWasSuccessfulEvent $event)
    {
        if (! config('backup-healthchecks.healthchecks_url')) {
            return;
        }

        Http::get(config('backup-healthchecks.healthchecks_url'));
    }
}
