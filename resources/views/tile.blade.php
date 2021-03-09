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
            {{ Carbon\Carbon::now($timezone)->format('H:i:s') }}
        </div>
        <div id="{{ $date }}" class="text-sm uppercase text-dimmed">
            {{ Carbon\Carbon::now($timezone)->format('D d/m') }}
        </div>
    </div>
</x-dashboard-tile>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/moment@2.x.x/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment-timezone@0.x.x/builds/moment-timezone-with-data.min.js"></script>
    @endpush
@endonce

@push('scripts')
    <script defer>
        setInterval(() => {
            document.getElementById('{{ $date }}').innerHTML = moment().tz('{{ $timezone }}').format('ddd DD/MM')
            document.getElementById('{{ $time }}').innerHTML = moment().tz('{{ $timezone }}').format('HH:mm:ss')
        }, 1000)
    </script>
@endpush
