<?php

use App\Http\Controllers\AlcoholController;
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
    Route::controller(AlcoholController::class)->group(function () {
        Route::get('/{alcohol}', 'show');
        Route::prefix('beer')->group(function () {
            Route::get('/', 'beers');
        });

        Route::prefix('wine')->group(function () {
            Route::get('/', 'wines');
        });

        Route::prefix('spirits')->group(function () {
            Route::get('/', 'spirits');
        });
    });
});
