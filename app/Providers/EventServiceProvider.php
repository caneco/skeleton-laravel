<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
