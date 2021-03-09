<?php

namespace Leitsch\BackupHealthchecks\Listeners;

use Illuminate\Support\Facades\Http;
use Spatie\Backup\Events\BackupHasFailed as BackupHasFailedEvent;

class BackupHasFailed
{
    public function handle(BackupHasFailedEvent $event)
    {
        if(!config('backup-healthchecks.healthchecks_url')) {
            return;
        }

        Http::get(config('backup-healthchecks.healthchecks_url') . '/fail');
    }
}
