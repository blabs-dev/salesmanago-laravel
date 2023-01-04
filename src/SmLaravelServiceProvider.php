<?php

namespace Blabs\SmLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Blabs\SmLaravel\Commands\SmLaravelCommand;

class SmLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('salesmanago-laravel');
    }

    public function boot()
    {
        $this->app->bind(SmLaravel::class, fn() => new SmLaravel(
            config('services.salesmanago.client_id') ?? '',
            config('services.salesmanago.api_secret') ?? '',
        ));
        return parent::boot();
    }
}
