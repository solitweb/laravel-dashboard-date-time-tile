# A date & time tile for the Laravel Dashboard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/solitweb/laravel-dashboard-date-time-tile.svg?style=flat-square)](https://packagist.org/packages/solitweb/laravel-dashboard-date-time-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/solitweb/laravel-dashboard-date-time-tile/run-tests?label=tests)](https://github.com/solitweb/laravel-dashboard-date-time-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/solitweb/laravel-dashboard-date-time-tile.svg?style=flat-square)](https://packagist.org/packages/solitweb/laravel-dashboard-date-time-tile)

This tile displays date & time for a specified timezone.

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

<p align="center">
    <img width="512" src="https://github.com/solitweb/laravel-dashboard-date-time-tile/raw/master/screenshot.png">
</p>

## Installation

You can install the package via composer:

```bash
composer require solitweb/laravel-dashboard-date-time-tile
```

## Usage

In your dashboard view you use the `livewire:date-time-tile` component.

```html
<x-dashboard>
    <livewire:date-time-tile position="a1" timezone="Europe/Brussels" />
</x-dashboard>
```

### Customizing the view

If you want to customize the view used to render this tile, run this command:

```bash
php artisan vendor:publish --provider="Solitweb\DateTimeTile\DateTimeTileServiceProvider" --tag="dashboard-date-time-tile-views"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email stijn@solitweb.be instead of using the issue tracker.

## Credits

- [Spatie](https://github.com/spatie/)
- [Moment.js](https://momentjs.com/)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.