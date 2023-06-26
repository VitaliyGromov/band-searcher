<?php

namespace App\Providers;

use App\Events\AdCreated;
use App\Events\AdStatusChanged;
use App\Events\User\ChangeUserActivityStatusEvent;
use App\Listeners\AdCreatedListener;
use App\Listeners\AdStatusChangedListener;
use App\Listeners\User\SendActivityStatusChangedMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        AdCreated::class => [
            AdCreatedListener::class,
        ],
        AdStatusChanged::class => [
            AdStatusChangedListener::class,
        ],
        ChangeUserActivityStatusEvent::class => [
            SendActivityStatusChangedMail::class,
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
