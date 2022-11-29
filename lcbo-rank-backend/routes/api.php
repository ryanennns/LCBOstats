<?php

use Illuminate\Support\Facades\Route;

Route::prefix('alcohol')->group(function () {
    Route::get('/updated', 'App\Http\Controllers\AlcoholController@getUpdated')
        ->name('api.alcohol.updated');
    Route::get('/{alcohol}', 'App\Http\Controllers\AlcoholController@show')
        ->name('api.alcohol.show');
    Route::get('/', 'App\Http\Controllers\AlcoholController@index')
        ->name('api.alcohol');
});
