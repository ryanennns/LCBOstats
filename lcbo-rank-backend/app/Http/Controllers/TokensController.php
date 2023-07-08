<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokensController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->validate([
            'name' => 'required|max:16',
        ])['name'];

        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'snickers'], 500);
        }

        $user = auth()->user();
        $token = $user->createToken($name);

        return ['token' => $token->plainTextToken];
    }
}
