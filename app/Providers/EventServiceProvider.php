<?php

namespace App\Providers;

use App\Models\City;
use App\Models\County;
use App\Models\District;
use App\Models\Voivodeship;
use App\Observers\CityObserver;
use App\Observers\CountyObserver;
use App\Observers\DistrictObserver;
use App\Observers\VoivodeshipObserver;
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
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        City::observe(CityObserver::class);
        County::observe(CountyObserver::class);
        District::observe(DistrictObserver::class);
        Voivodeship::observe(VoivodeshipObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
