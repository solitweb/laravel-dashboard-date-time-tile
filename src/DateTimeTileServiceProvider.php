<?php

namespace Solitweb\DateTimeTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class DateTimeTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('date-time-tile', DateTimeTileComponent::class);

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-date-time-tile'),
        ], 'dashboard-date-time-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-date-time-tile');
    }
}
