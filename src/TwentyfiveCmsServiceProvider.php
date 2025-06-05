<?php

namespace Littleboy130491\TwentyfiveCms;

use Littleboy130491\TwentyfiveCms\Commands\TwentyfiveCmsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TwentyfiveCmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('twentyfive-cms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_twentyfive_cms_table')
            ->hasCommand(TwentyfiveCmsCommand::class);
    }
}
