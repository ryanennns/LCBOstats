<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\CoolerController;
use App\Http\Controllers\SpiritsController;
use App\Http\Controllers\WineController;
use Illuminate\Support\Facades\Route;

Route::prefix('alcohol')->group(function () {
    Route::get('/efficient', 'App\Http\Controllers\AlcoholController@getEfficient');
    Route::get('/', 'App\Http\Controllers\AlcoholController@getDefault');
});
