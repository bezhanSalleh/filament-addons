
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package filament-tab-pills-component

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bezhansalleh/filament-tab-pills-component.svg?style=flat-square)](https://packagist.org/packages/bezhansalleh/filament-tab-pills-component)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bezhansalleh/filament-tab-pills-component/run-tests?label=tests)](https://github.com/bezhansalleh/filament-tab-pills-component/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bezhansalleh/filament-tab-pills-component/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bezhansalleh/filament-tab-pills-component/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bezhansalleh/filament-tab-pills-component.svg?style=flat-square)](https://packagist.org/packages/bezhansalleh/filament-tab-pills-component)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/filament-tab-pills-component.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/filament-tab-pills-component)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require bezhansalleh/filament-tab-pills-component
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-tab-pills-component-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-tab-pills-component-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-tab-pills-component-views"
```

## Usage

```php
$filamentTabPillsComponent = new BezhanSalleh\FilamentTabPillsComponent();
echo $filamentTabPillsComponent->echoPhrase('Hello, BezhanSalleh!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/bezhanSalleh/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bezhan Salleh](https://github.com/bezhanSalleh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
