<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    CityRepositoryInterface,
    DealershipRepositoryInterface,
    SolarBoardRepositoryInterface,
    StateRepositoryInterface,
    UserRepositoryInterface
};

use App\Repositories\{
    CityEloquentRepository,
    DealershipEloquentRepository,
    SolarBoardEloquentRepository,
    StateEloquentRepository,
    UserEloquentRepository
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
            StateEloquentRepository::class
        );

        $this->app->bind(
            CityRepositoryInterface::class,
            CityEloquentRepository::class
        );

        $this->app->bind(
            SolarBoardRepositoryInterface::class,
            SolarBoardEloquentRepository::class
        );

        $this->app->bind(
            DealershipRepositoryInterface::class,
            DealershipEloquentRepository::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserEloquentRepository::class
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
