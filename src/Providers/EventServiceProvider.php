<?php

namespace Leitsch\BackupHealthchecks\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Leitsch\BackupHealthchecks\Listeners\BackupHasFailed as BackupHasFailedListener;
use Leitsch\BackupHealthchecks\Listeners\BackupWasSuccessful as BackupWasSuccessfulListener;
use Spatie\Backup\Events\BackupHasFailed;
use Spatie\Backup\Events\BackupWasSuccessful;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        BackupWasSuccessful::class => [
            BackupWasSuccessfulListener::class,
        ],

        BackupHasFailed::class => [
            BackupHasFailedListener::class,
        ],
    ];
}
