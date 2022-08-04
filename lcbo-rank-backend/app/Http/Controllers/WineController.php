<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WineController extends Controller
{
    public function getDefault(Request $request)
    {
        $numOfResults = min(
            $request->input('numOfResults', 10),
            AlcoholController::MAX_ALCOHOLS_RETURNED
        );
        return Alcohol::getByCategory(Alcohol::WINE, $numOfResults);
    }

    public function getEfficient(Request $request)
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->where('category', '=', Alcohol::WINE)
            ->get()
            ->take(AlcoholController::MAX_ALCOHOLS_RETURNED);
    }
}
