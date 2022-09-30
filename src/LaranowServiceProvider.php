<?php

namespace JakyeRU\Laranow;

use JakyeRU\Laranow\Commands\LaranowCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaranowServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laranow')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laranow_table')
            ->hasCommand(LaranowCommand::class);
    }
}
