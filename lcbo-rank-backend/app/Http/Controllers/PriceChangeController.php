<?php

namespace App\Http\Controllers;

use App\Http\Resources\PriceChangeResource;
use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PriceChangeController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return PriceChangeResource::collection(
            Alcohol::has('priceChanges', '>', 1)
                ->orderBy('created_at')
                ->paginate(25)
        );
    }

    public function show(Alcohol $alcohol, Request $request): array // todo uh oh spaghettio what is going on here
    {
        return (new PriceChangeResource($alcohol))->toArray($request);
    }
}
