<?php

namespace Binomedev\ClientsManager;

use Binomedev\ClientsManager\Commands\ClientsManagerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShowcaseClientsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('showcase-clients')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_showcase_clients_table')
            //->hasCommand(ClientsManagerCommand::class)
        ;
    }
}
