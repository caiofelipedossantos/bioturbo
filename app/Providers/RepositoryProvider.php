<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    CityRepositoryInterface,
    DealershipRepositoryInterface,
    SolarBoardRepositoryInterface,
    StateRepositoryInterface
};

use App\Repositories\{
    CityRepository,
    DealershipRepository,
    SolarBoardRepository,
    StateRepository
};

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            StateRepositoryInterface::class,
            StateRepository::class
        );

        $this->app->bind(
            CityRepositoryInterface::class,
            CityRepository::class
        );

        $this->app->bind(
            DealershipRepositoryInterface::class,
            DealershipRepository::class
        );

        $this->app->bind(
            SolarBoardRepositoryInterface::class,
            SolarBoardRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
