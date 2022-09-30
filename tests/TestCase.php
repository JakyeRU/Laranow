<?php

namespace JakyeRU\Laranow\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JakyeRU\Laranow\LaranowServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'JakyeRU\\Laranow\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaranowServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laranow_table.php.stub';
        $migration->up();
        */
    }
}
