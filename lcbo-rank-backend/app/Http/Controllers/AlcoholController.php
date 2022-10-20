<?php

namespace App\Http\Controllers;

use App\Http\Filters\AlcoholFilters;
use App\Http\Resources\AlcoholResource;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlcoholController extends Controller
{
    public const PAGINATE_BY = 25;

    public function show(Alcohol $alcohol): AlcoholResource
    {
        return new AlcoholResource($alcohol);
    }

    public function getDefault(AlcoholFilters $filters)
    {
        return AlcoholResource::collection(Alcohol::filter($filters)->paginate(self::PAGINATE_BY));
    }

    public function getUpdated(Request $request)
    {
        $updatedSince = $request->input('updatedSince', Carbon::now()->subWeek());
        $updatedRecords = Alcohol::query()
            ->where('updated_at', '>', $updatedSince)
            ->orderBy('permanent_id')
            ->paginate(self::PAGINATE_BY);

        return AlcoholResource::collection($updatedRecords);
    }
}

