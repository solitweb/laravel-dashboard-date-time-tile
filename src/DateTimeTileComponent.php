<?php

namespace Solitweb\DateTimeTile;

use Livewire\Component;

class DateTimeTileComponent extends Component
{
    public $position;

    public $timezone;

    public function mount(string $position, ?string $timezone)
    {
        $this->position = $position;

        $this->timezone = $timezone ?? config('app.timezone');
    }

    public function render()
    {
        return view('dashboard-date-time-tile::tile', [
            'timezone' => $this->timezone,
        ]);
    }
}
