<?php

namespace App\Http\Controllers;

use App\Http\Filters\AlcoholFilters;
use App\Http\Resources\AlcoholResource;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlcoholController extends Controller
{
    // todo create a function to always return expected format
    public const DEFAULT_ALCOHOLS_RETURNED = 25;

    public function show(Alcohol $alcohol): AlcoholResource
    {
        return new AlcoholResource($alcohol);
    }

    public function getDefault(AlcoholFilters $filters)
    {
        return AlcoholResource::collection(Alcohol::filter($filters)->paginate(25));
    }

    public function getUpdated(Request $request) // todo delete this? test it?
    {
        $updatedSince = $request->input('updatedSince', Carbon::now()->subWeek());
        $updatedRecords = Alcohol::query()
            ->where('updated_at', '>', $updatedSince)
            ->orderBy('permanent_id')
            ->paginate(25); // todo PAGINATE

        return AlcoholResource::collection($updatedRecords);
    }
}

