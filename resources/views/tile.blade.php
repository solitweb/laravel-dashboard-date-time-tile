@php
    $time = uniqid('time-');
    $date = uniqid('date-');
@endphp

<x-dashboard-tile :position="$position">
    <div class="grid gap-2 justify-items-center h-full text-center">
        <div class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums">
            {{ $title ?? str_replace('_', ' ', $timezone) }}
        </div>
        <div id="{{ $time }}" class="self-center font-bold text-4xl tracking-wide leading-none">
            {{ Carbon\Carbon::now($timezone)->isoFormat('LTS') }}
        </div>
        <div id="{{ $date }}" class="text-sm uppercase text-dimmed">
            {{ Carbon\Carbon::now($timezone)->isoFormat('LL') }}
        </div>
    </div>
</x-dashboard-tile>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/moment@2.x.x/min/moment-with-locales.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment-timezone@0.x.x/builds/moment-timezone-with-data.min.js"></script>
    @endpush
@endonce

@push('scripts')
    <script defer>
        setInterval(() => {
            document.getElementById('{{ $date }}').innerHTML = moment().locale('{{ config('app.locale') }}').tz('{{ $timezone }}').format('LL')
            document.getElementById('{{ $time }}').innerHTML = moment().locale('{{ config('app.locale') }}').tz('{{ $timezone }}').format('LTS')
        }, 1000)
    </script>
@endpush
