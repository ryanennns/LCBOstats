<?php

namespace App\Http\Controllers;

use App\Http\Filters\AlcoholFilters;
use App\Http\Resources\AlcoholResource;
use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AlcoholController extends Controller
{
    public const PAGINATE_BY = 25;

    public function show(Alcohol $alcohol): AlcoholResource
    {
        return new AlcoholResource($alcohol);
    }

    public function index(AlcoholFilters $filters): AnonymousResourceCollection
    {
        return AlcoholResource::collection(
            Alcohol::filter($filters)
                ->orderBy('permanent_id')
                ->where('price_index', '!=', 'null')
                ->paginate(self::PAGINATE_BY)
        );
    }

    public function search(AlcoholFilters $filters, Request $request)
    {
        $filteredIds = Alcohol::filter($filters)->select('permanent_id')->get()->pluck('permanent_id');
        $searchedAlcohols = Alcohol::search($request->input('query', ''))
            ->whereIn('permanent_id', $filteredIds->toArray());

        if ($request->exists('sortBy')) {
            $searchedAlcohols->orderBy($request->input('sortBy'));
        }

        return AlcoholResource::collection($searchedAlcohols->paginate(self::PAGINATE_BY));
    }
}

