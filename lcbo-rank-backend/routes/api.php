<?php

use Illuminate\Support\Facades\Route;

Route::prefix('alcohol')->group(function () {
    Route::get('/efficient', 'App\Http\Controllers\AlcoholController@getEfficient');
    Route::get('/', 'App\Http\Controllers\AlcoholController@getDefault');
    Route::get('/updated', 'App\Http\Controllers\AlcoholController@updatedStatus');
});
