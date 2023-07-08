<?php

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'documentation coming soon :)';
});

Route::prefix('users')->name('users.')->group(function () {
    Route::post('store', '\App\Http\Controllers\UserController@store')
        ->name('store');
    Route::post('login', '\App\Http\Controllers\UserController@login')
        ->name('login');
});

Route::prefix('tokens')->name('tokens')->group(function () {
    Route::get('create', '\App\Http\Controllers\TokensController@create')
        ->name('create');
});


Route::get('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $user = User::query()->where('email', $credentials['email'])->where('password', $credentials['password'])->firstOrFail();
    auth()->login($user);
})->withoutMiddleware(VerifyCsrfToken::class)->name('login');
