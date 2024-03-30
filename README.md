# Add countdown fields and columns to Filament forms and tables

[![Latest Version on Packagist](https://img.shields.io/packagist/v/RovshenAshirov/filament-countdown.svg?style=flat-square)](https://packagist.org/packages/RovshenAshirov/filament-countdown)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/RovshenAshirov/filament-countdown/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/RovshenAshirov/filament-countdown/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/RovshenAshirov/filament-countdown/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/RovshenAshirov/filament-countdown/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/RovshenAshirov/filament-countdown.svg?style=flat-square)](https://packagist.org/packages/RovshenAshirov/filament-countdown)

Add beautiful and customizable countdown fields and columns to Filament forms and tables.

## Installation

You can install the package via composer:

```bash
composer require Rovshen/filament-countdown
```

Publish the assets so the styles are correct:

```bash
php artisan filament-countdown:install
```

## Usage

You can add a countdown field to your forms like this:

```php
use Rovshen\FilamentCountdown\Components\Countdown;

$form->schema([
    Countdown::make(),
]);
```

You can add a countdown column to your tables like this:

```php
use Rovshen\FilamentCountdown\Columns\CountdownColumn;

$table->schema([
    CountdownColumn::make(),
]);
```

You can add a countdown entry to your infolists like this:

```php
use Rovshen\FilamentCountdown\Entries\CountdownEntry;

$infolist->schema([
    CountdownEntry::make(),
]);


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rovshen Ashirov](https://github.com/RovshenAshirov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
