<?php

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'documentation coming soon :)';
});

Route::any('/tokens/create', function (Request $request) {
//    $token = $request->user()->createToken($request->token_name);
    $user = User::factory()->create([
        'password' => 'mars'
    ]);

    auth()->login($user);

    $token = $user->createToken('meme');

    return ['token' => $token->plainTextToken];
})->withoutMiddleware(VerifyCsrfToken::class);

Route::get('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $user = User::query()->where('email', $credentials['email'])->where('password', $credentials['password'])->firstOrFail();
    auth()->login($user);
})->withoutMiddleware(VerifyCsrfToken::class)->name('login');
