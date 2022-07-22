<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\SpiritsController;
use App\Http\Controllers\WineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('alcohol')->group(function () {
    Route::controller(BeerController::class)
        ->prefix('beer')
        ->group(function () {
            Route::get('/', 'getDefault');
            Route::get('/efficient', 'getEfficient');
        });

    Route::controller(SpiritsController::class)
        ->prefix('spirits')
        ->group(function () {
            Route::get('/', 'getDefault');
            Route::get('/efficient', 'getEfficient');
        });

    Route::controller(WineController::class)
        ->prefix('wine')
        ->group(function () {
            Route::get('/', 'getDefault');

        });

    Route::get('/efficient', 'App\Http\Controllers\AlcoholController@getEfficient');
    Route::get('/{alcohol}', 'App\Http\Controllers\AlcoholController@show');
});
