<?php

namespace BezhanSalleh\FilamentAddons\Tests;

use BezhanSalleh\FilamentAddons\FilamentAddonsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentAddonsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-tab-pills-component_table.php.stub';
        $migration->up();
        */
    }
}
