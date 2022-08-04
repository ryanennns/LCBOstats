<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use Illuminate\Http\Request;

class BeerController extends AlcoholController
{
    public function getDefault(Request $request)
    {
        $numOfResults = min($request->input('numOfResults', 10), 30);
        $results = Alcohol::getByCategory(Alcohol::BEER, $numOfResults);
        return response()->json($results);
    }

    public function getEfficient(
        Request $request,
        String $category = Alcohol::BEER,
        String $subcategory = ''
    )
    {
        return parent::getEfficient($request, $category);
    }
}
