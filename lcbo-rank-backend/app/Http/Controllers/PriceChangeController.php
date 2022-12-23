<?php

namespace App\Http\Controllers;

use App\Http\Resources\PriceChangeResource;
use App\Models\Alcohol;
use Illuminate\Http\Request;

class PriceChangeController extends Controller
{
    public function show(Alcohol $alcohol, Request $request)
    {
        return (new PriceChangeResource($alcohol))->toArray($request);
    }
}
