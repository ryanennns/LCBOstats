<?php

use App\Http\Controllers\AlcoholController;
use App\Http\Controllers\PriceChangeController;
use Illuminate\Support\Facades\Route;

Route::middleware('log-requests')->group(function () {
    Route::prefix('alcohol')
        ->controller(AlcoholController::class)
        ->group(function () {
            Route::get('/updated', 'getUpdated')
                ->name('api.alcohol.updated');
            Route::get('/search', 'search')
                ->name('api.alcohol.search');
            Route::get('/{alcohol}', 'show')
                ->name('api.alcohol.show');
            Route::get('/', 'index')
                ->name('api.alcohol');
        });

    Route::prefix('history')
        ->controller(PriceChangeController::class)
        ->group(function () {
            Route::get('/{alcohol}', 'show')
                ->name('api.history.show');
            Route::get('/', 'index')
                ->name('api.history.index');
        });
});
