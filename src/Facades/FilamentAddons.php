<?php

namespace BezhanSalleh\FilamentAddons\Facades;

use Illuminate\Support\Facades\Facade;

class FilamentAddons extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'filament-addons';
    }
}
