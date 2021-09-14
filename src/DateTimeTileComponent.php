<?php

namespace Solitweb\DateTimeTile;

use Livewire\Component;

class DateTimeTileComponent extends Component
{
    public $position;

    public $timezone;

    public $title;

    public function mount(string $position, ?string $timezone = null, ?string $title = null)
    {
        $this->position = $position;

        $this->timezone = $timezone ?? config('app.timezone');

        $this->title = $title ?? null;
    }

    public function render()
    {
        return view('dashboard-date-time-tile::tile', [
            'timezone' => $this->timezone,
        ]);
    }
}
