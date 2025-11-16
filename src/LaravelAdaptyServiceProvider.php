<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty;

use Gridwb\LaravelAdapty\Contracts\ApiClientContract;
use Gridwb\LaravelAdapty\Contracts\ClientContract;
use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAdaptyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-adapty')
            ->hasConfigFile('adapty')
            ->hasRoute('adapty');
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(ApiClientContract::class, function (): ApiClient {
            /** @var string $apiUrl */
            $apiUrl = Config::get('adapty.api_url');
            /** @var string $apiKey */
            $apiKey = Config::get('adapty.api_key');

            return new ApiClient($apiUrl, $apiKey);
        });

        $this->app->singleton(ClientContract::class, Client::class);
        $this->app->alias(ClientContract::class, 'adapty');
    }
}
