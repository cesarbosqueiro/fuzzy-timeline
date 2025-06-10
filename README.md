# Fuzzy Filament Timeline

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ftimeline/fuzzy-timeline.svg?style=flat-square)](https://packagist.org/packages/ftimeline/fuzzy-timeline)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ftimeline/fuzzy-timeline/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ftimeline/fuzzy-timeline/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ftimeline/fuzzy-timeline/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ftimeline/fuzzy-timeline/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ftimeline/fuzzy-timeline.svg?style=flat-square)](https://packagist.org/packages/ftimeline/fuzzy-timeline)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ftimeline/fuzzy-timeline
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="fuzzy-timeline-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="fuzzy-timeline-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="fuzzy-timeline-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$fuzzyTimeline = new FTimeline\FuzzyTimeline();
echo $fuzzyTimeline->echoPhrase('Hello, FTimeline!');
```

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

- [Cesar Bosqueiro](https://github.com/cesar.bosqueiro)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
