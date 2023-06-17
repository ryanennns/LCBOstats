<?php

namespace App\Http\Controllers;

use App\Http\Filters\AlcoholFilters;
use App\Http\Requests\AlcoholRequest;
use App\Http\Resources\AlcoholResource;
use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Nette\Schema\ValidationException;

class AlcoholController extends Controller
{
    public const PAGINATE_BY = 25;

    public function show(Alcohol $alcohol): AlcoholResource
    {
        return new AlcoholResource($alcohol);
    }

    public function index(AlcoholFilters $filters, AlcoholRequest $request)
    {
        return AlcoholResource::collection(
            Alcohol::filter($filters)
                ->orderBy('permanent_id')
                ->where('valid_url', '=', true)
                ->where('price_index', '!=', 'null')
                ->paginate(self::PAGINATE_BY)
        );
    }

    public function search(AlcoholFilters $filters, AlcoholRequest $request)
    {
        $filteredIds = Alcohol::filter($filters)->select('permanent_id')->get()->pluck('permanent_id');
        $searchedAlcohols = Alcohol::search($request->input('query', ''));

        // todo unghetto this
        if ($filteredIds === []) {
            $searchedAlcohols->whereIn('permanent_id', $filteredIds->toArray());
        }

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

