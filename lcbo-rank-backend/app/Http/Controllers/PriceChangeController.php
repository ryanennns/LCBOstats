<?php

namespace App\Http\Controllers;

use App\Http\Resources\PriceChangeResource;
use App\Models\Alcohol;
use Illuminate\Http\Request;

class PriceChangeController extends Controller
{
    public function index()
    {
        return PriceChangeResource::collection( // todo sort (git is being pushy)
            Alcohol::has('priceChanges', '>', 1)
                ->paginate(25)
        );
    }

    public function show(Alcohol $alcohol, Request $request)
    {
        return (new PriceChangeResource($alcohol))->toArray($request);
    }
}
