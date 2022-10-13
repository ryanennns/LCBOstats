<?php

namespace App\Http\Controllers;

use App\Http\Filters\AlcoholFilters;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AlcoholController extends Controller
{
    // todo create a function to always return expected format
    public const DEFAULT_ALCOHOLS_RETURNED = 25;

    public function show(Alcohol $alcohol): JsonResponse
    {
        return response()->json($alcohol);
    }

    public function getDefault(AlcoholFilters $filters)
    {
        return Alcohol::query()->filter($filters)->get(); // todo ask about ::query->scope vs ::scope
    }

    public function getUpdated(Request $request): JsonResponse
    {
        $updatedSince = $request->input('updatedSince', Carbon::now()->subWeek());
        $updatedRecords = Alcohol::query()
            ->where('updated_at', '>', $updatedSince)
            ->orderBy('permanent_id')
            ->get(); // todo PAGINATE

        return response()->json([
            'recordsUpdated' => $updatedRecords->toArray(),
        ]);
    }
}

