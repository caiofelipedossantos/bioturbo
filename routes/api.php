<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\{
    CityController,
    DealershipController,
    SimulationController,
    SolarBoardController,
    StateController,
    UserController
};
use App\Http\Controllers\Api\Auth\{
    AuthApiUserController
};

Route::group([
    'prefix' => 'v1',
    'namespace' => 'api'
], function () {
    //Route::group(['middleware' => ['auth:sanctum']], function () {

        Route::prefix('state')->group(function () {
            Route::get('list', [StateController::class, 'list'])->name('state.list');
            Route::get('find/{uuid}', [StateController::class, 'find'])->name('state.find');
            Route::get('find/{uuid}/all', [StateController::class, 'findAll'])->name('state.all');
            Route::post('store', [StateController::class, 'store'])->name('state.store');
            Route::put('update/{uuid}', [StateController::class, 'update'])->name('state.update');
            Route::delete('delete/{uuid}', [StateController::class, 'delete'])->name('state.delete');
        });

        Route::prefix('city')->group(function () {
            Route::get('list', [CityController::class, 'list'])->name('city.list');
            Route::get('find/{uuid}', [CityController::class, 'find'])->name('city.find');
            Route::get('find/{uuid}/all', [CityController::class, 'findAll'])->name('city.all');
            Route::post('store', [CityController::class, 'store'])->name('city.store');
            Route::put('update/{uuid}', [CityController::class, 'update'])->name('city.update');
            Route::delete('delete/{uuid}', [CityController::class, 'delete'])->name('city.delete');
        });

        Route::prefix('solarboard')->group(function () {
            Route::get('list', [SolarBoardController::class, 'list'])->name('solarboard.list');
            Route::get('find/{uuid}', [SolarBoardController::class, 'find'])->name('solarboard.find');
            Route::post('store', [SolarBoardController::class, 'store'])->name('solarboard.store');
            Route::put('update/{uuid}', [SolarBoardController::class, 'update'])->name('solarboard.update');
            Route::delete('delete/{uuid}', [SolarBoardController::class, 'delete'])->name('solarboard.delete');
        });

        Route::prefix('dealership')->group(function () {
            Route::get('list', [DealershipController::class, 'list'])->name('dealership.list');
            Route::get('find/{uuid}', [DealershipController::class, 'find'])->name('dealership.find');
            Route::post('store', [DealershipController::class, 'store'])->name('dealership.store');
            Route::put('update/{uuid}', [DealershipController::class, 'update'])->name('dealership.update');
            Route::delete('delete/{uuid}', [DealershipController::class, 'delete'])->name('dealership.delete');
        });

        Route::prefix('user')->group(function () {
            Route::get('list', [UserController::class, 'list'])->name('user.list');
            Route::get('find/{uuid}', [UserController::class, 'find'])->name('user.find');
            Route::post('store', [UserController::class, 'store'])->name('user.store');
            Route::put('update/{uuid}', [UserController::class, 'update'])->name('user.update');
            Route::delete('delete/{uuid}', [UserController::class, 'delete'])->name('user.delete');
        });

        Route::prefix('simulation')->group(function () {
            Route::post('generate', [SimulationController::class, 'generate'])->name('simulation.generate');
        });

    //});
    //Route::post('/tokens/create', [AuthApiUserController::class, 'auth']);
});
