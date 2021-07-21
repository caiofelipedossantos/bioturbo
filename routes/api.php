<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\{
    CityApiController,
    DealerShipApiController,
    SolarBoardApiController,
    StateApiController
};
use App\Http\Controllers\Api\Auth\{
    AuthApiUserController
};

Route::group([
    'prefix' => 'v1',
    'namespace' => 'api'
], function () {
    //Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/states', [StateApiController::class, 'index']);
    Route::get('/states/{uuid}', [StateApiController::class, 'show']);
    Route::get('/cities', [CityApiController::class, 'index']);
    Route::get('/cities/{uuid}', [CityApiController::class, 'getCitiesByState']);
    Route::get('/dealerships', [DealershipApiController::class, 'index']);
    Route::get('/dealerships/{uuid}', [DealerShipApiController::class, 'getDealershipsByState']);
    Route::get('/solarboards', [SolarBoardApiController::class, 'index']);
    Route::get('/solarboards/{uuid}', [SolarBoardApiController::class, 'show']);
    //});
    //Route::post('/tokens/create', [AuthApiUserController::class, 'auth']);
});
