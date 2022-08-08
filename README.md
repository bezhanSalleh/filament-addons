
<a href="https://github.com/bezhansalleh/filament-addons">
<img style="width: 100%; max-width: 100%;" alt="filament-addons-art" src="https://user-images.githubusercontent.com/10007504/178133343-3834205d-03a8-4c6c-9825-a90c86d15bbe.png" >
</a>

<p align="center">
    <a href="https://filamentadmin.com/docs/2.x/admin/installation">
        <img alt="FILAMENT 8.x" src="https://img.shields.io/badge/FILAMENT-2.x-EBB304?style=for-the-badge">
    </a>
    <a href="https://packagist.org/packages/bezhansalleh/filament-addons">
        <img alt="Packagist" src="https://img.shields.io/packagist/v/bezhansalleh/filament-addons.svg?style=for-the-badge&logo=packagist">
    </a>
    <a href="https://github.com/bezhansalleh/filament-addons/actions?query=workflow%3Arun-tests+branch%3Amain">
        <img alt="Tests Passing" src="https://img.shields.io/github/workflow/status/bezhansalleh/filament-addons/run-tests?style=for-the-badge&logo=github&label=tests">
    </a>
    <a href="https://github.com/bezhansalleh/filament-addons/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain">
        <img alt="Code Style Passing" src="https://img.shields.io/github/workflow/status/bezhansalleh/filament-addons/run-tests?style=for-the-badge&logo=github&label=code%20style">
    </a>

<a href="https://packagist.org/packages/bezhansalleh/filament-addons">
    <img alt="Downloads" src="https://img.shields.io/packagist/dt/bezhansalleh/filament-addons.svg?style=for-the-badge" >
    </a>
</p>

<hr style="background-color: #ff2e21"></hr>

# Filament Addons

A set of filament components with extra functionality & fresh look

1. Pills (Tab Pills)
2. Chip Column
3. Coming Soon ...

## Installation

You can install the package via composer:

```bash
composer require bezhansalleh/filament-addons
```
### Admin Panel & Forms

#### Pills (Tab Pills)
`Pills` basically behaves like the already existing `Tabs` form component but does more:

- Can have icons 🥳
- Can have badges 💯
- has a **fresh** look 💅
- Can be marked as active ✅

```php
use BezhanSalleh\FilamentAddons\Forms\Components;

        Components\Pills::make('Heading')
            ->activePill(2) // pill two will be the default active one
            ->pills([
                Components\Pills\Pill::make('Shield')
                    ->icon('heroicon-o-shield-check')
                    ->badge('7.2K')
                    ->schema([
                        Forms\Components\View::make('static-hello')
                    ]),
                Components\Pills\Pill::make('Google Analytics')
                    ->schema([
                        Forms\Components\View::make('static-why')
                            ->fieldWrapperView(fn() => view('welcome')),
                        ])->columns(1),
                Components\Pills\Pill::make('Translations Manager')
                    ->icon('heroicon-o-sparkles')
                    ->schema([
                        Forms\Components\View::make('static-view'),
                        ...
                    ]),
                ]),
```
> **Note**
> The above snippet inside a resource form or page form will render as follow:

https://user-images.githubusercontent.com/10007504/178133544-3621418b-8cc2-41c8-bfc0-c12d263dd0d4.mov

### Admin Panel & Tables

#### ChipColumn
`ChipColumn` basically behaves like the already existing `Badge` Column but changes the appearance and icon desing:
```php
use BezhanSalleh\FilamentAddons\Tables\Columns\ChipColumn;

ChipColumn::make('role')
    ->label('Role(Chip)')
    ->colors([
        'primary',
        'success' => fn ($state): bool => $state === 'admin',
        'warning' => fn ($state): bool => $state === 'manager',
        'danger' => fn ($state): bool => $state === 'editor',
    ])
    ->icons([
        'heroicon-o-x',
        'heroicon-s-shield-check' => fn ($state): bool => $state === 'admin',
        'heroicon-o-user' => fn ($state): bool => $state === 'manager',
        'heroicon-o-sparkles' => fn ($state): bool => $state === 'editor'
    ])
    ->iconPosition('before')
```
<img width="211" alt="Screen Shot 2022-08-08 at 2 29 47 PM" src="https://user-images.githubusercontent.com/10007504/183393206-053f52c8-339d-4b53-b89b-b39f8c666999.png">

* Use `invert()` to make it pop
<img width="211" alt="Screen Shot 2022-08-08 at 2 30 07 PM" src="https://user-images.githubusercontent.com/10007504/183393247-24f9763c-e09a-469f-bc6f-31363130e5ba.png">

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-addons-views"
```
## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Contributing

If you want to contribute to this packages, you may want to test it in a real Filament project:

- Fork this repository to your GitHub account.
- Create a Filament app locally.
- Clone your fork in your Filament app's root directory.
- In the `/filament-addons` directory, create a branch for your fix, e.g. `fix/error-message`.

Install the packages in your app's `composer.json`:

```json
"require": {
    "bezhansalleh/filament-addons": "dev-fix/error-message as main-dev",
},
"repositories": [
    {
        "type": "path",
        "url": "filament-addons"
    }
]
```

Now, run `composer update`.

Please see [CONTRIBUTING](https://github.com/bezhanSalleh/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bezhan Salleh](https://github.com/bezhanSalleh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
