<?php

namespace App\Http\Controllers;

use App\Models\PriceChange;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        PriceChange::with('alcohol')->where('created_at', '>', Carbon::now()->subDay())->limit(25);

        return response()->json([

        ]);
    }
}
