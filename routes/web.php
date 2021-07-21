<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::prefix('dealership')->group(function () {
        Route::get('/list',);
    });
});

Route::get('get', function () {
    $obj = json_decode('[{"Concessionaria":"ETO","Id":23,"Tarifa":1.5400,"Uf":"TO"}]');
    $s = '';
    foreach ($obj as $o) {
        $s .= '[' . PHP_EOL;
        $s .= '"name" => "' . $o->Concessionaria . '",' . PHP_EOL;
        $s .= '"tax" => ' . str_replace(',', '.', $o->Tarifa) . ',' . PHP_EOL;
        $s .= '"state_id" => 27' . PHP_EOL;
        $s .= '],' . PHP_EOL;
    }

    dd($s);
});
