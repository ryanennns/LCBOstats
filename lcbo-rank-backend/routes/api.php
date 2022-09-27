<?php

use Illuminate\Support\Facades\Route;

Route::prefix('alcohol')->group(function () {
    Route::get('/updated', 'App\Http\Controllers\AlcoholController@getUpdated');
    Route::get('/efficient', 'App\Http\Controllers\AlcoholController@getEfficient');
    Route::get('/{alcohol}', 'App\Http\Controllers\AlcoholController@show');
    Route::get('/', 'App\Http\Controllers\AlcoholController@getDefault');
});
