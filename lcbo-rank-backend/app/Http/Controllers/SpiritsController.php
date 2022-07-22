<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpiritsController extends Controller
{
    public function getDefault(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        return Alcohol::getByCategory(Alcohol::WINE, $numOfResults);
    }

    public function getEfficient()
    {
        return DB::table('alcohols')
            ->orderBy('price_index')
            ->where('category', '=', Alcohol::SPIRITS)
            ->get()
            ->take(30);
    }
}
