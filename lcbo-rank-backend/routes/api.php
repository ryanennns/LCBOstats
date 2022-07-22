<?php

use App\Http\Controllers\AlcoholController;
use App\Http\Controllers\BeerController;
use App\Http\Controllers\SpiritsController;
use App\Http\Controllers\WineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('alcohol')->group(function () {
    Route::controller(BeerController::class)
        ->prefix('beer')
        ->group(function () {
            Route::get('/', 'getDefault');
        });

    Route::controller(SpiritsController::class)
        ->prefix('spirits')
        ->group(function () {
            Route::get('/', 'getDefault');

        });

    Route::controller(WineController::class)
        ->prefix('wine')
        ->group(function () {
            Route::get('/', 'getDefault');

        });

    Route::get('/{alcohol}', 'App\Http\Controllers\AlcoholController@show');
});
