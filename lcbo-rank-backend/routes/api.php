<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\CoolerController;
use App\Http\Controllers\SpiritsController;
use App\Http\Controllers\WineController;
use Illuminate\Support\Facades\Route;

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
            Route::get('/efficient', 'getEfficient');
            Route::get('/', 'getDefault');

            Route::group(['prefix' => 'gin'], function () {
                Route::get('/efficient', 'getEfficientGin');
                Route::get('/', 'getGin');
            });

            Route::group(['prefix' => 'vodka'], function () {
                Route::get('/efficient', 'getEfficientVodka');
                Route::get('/', 'getVodka');
            });

            Route::group(['prefix' => 'tequila'], function () {
                Route::get('/efficient', 'getEfficientTequila');
                Route::get('/', 'getTequila');
            });
        });

    Route::controller(WineController::class)
        ->prefix('wine')
        ->group(function () {
            Route::get('/', 'getDefault');
            Route::get('/efficient', 'getEfficient');
        });

    Route::controller(CoolerController::class)
        ->prefix('coolers')
        ->group(function () {
            Route::get('/', 'getDefault');
            Route::get('/efficient', 'getEfficient');
        });

    Route::get('/efficient', 'App\Http\Controllers\AlcoholController@getEfficient');
    Route::get('/', 'App\Http\Controllers\AlcoholController@getDefault');
});
