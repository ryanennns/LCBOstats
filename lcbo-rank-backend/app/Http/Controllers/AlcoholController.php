<?php

namespace App\Http\Controllers;

use App\Http\Filters\AlcoholFilters;
use App\Http\Requests\AlcoholRequest;
use App\Http\Resources\AlcoholResource;
use App\Models\Alcohol;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AlcoholController extends Controller
{
    public const PAGINATE_BY = 25;

    public function show(Alcohol $alcohol): AlcoholResource
    {
        return new AlcoholResource($alcohol);
    }

    public function index(AlcoholFilters $filters, AlcoholRequest $request): AnonymousResourceCollection
    {
        return AlcoholResource::collection(
            Alcohol::filter($filters)
                ->orderBy('permanent_id')
                ->where('is_buyable', true)
                ->whereNotNull('price_index')
                ->paginate(self::PAGINATE_BY)
        );
    }

    public function search(AlcoholFilters $filters, AlcoholRequest $request): AnonymousResourceCollection
    {
        if (!$request->has('query')) {
            return $this->index($filters, $request);
        }

        $filteredIds = Alcohol::filter($filters)->select('permanent_id')->get()->pluck('permanent_id');
        $searchedAlcohols = Alcohol::search($request->input('query', ''))
            ->whereIn('permanent_id', $filteredIds->toArray());

        if ($request->exists('sortBy')) {
            $searchedAlcohols->orderBy($request->input('sortBy'));
        } else if ($request->exists('sortAsc')) {
            $searchedAlcohols->orderBy($request->input('sortAsc'));
        } else if ($request->exists('sortDesc')) {
            $searchedAlcohols->orderBy($request->input('sortDesc'), 'desc');
        }

        return AlcoholResource::collection($searchedAlcohols->paginate(self::PAGINATE_BY));
    }
}
