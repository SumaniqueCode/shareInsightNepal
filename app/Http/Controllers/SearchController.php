<?php

namespace App\Http\Controllers;

use App\Models\User\LiveMarket;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function clickSearchData(string $symbol) {
        $stockResult = LiveMarket::where('symbol', $symbol)->first();
        return view('search', compact('stockResult'));
    }

    function searchData(Request $request) {
        $stockName = $request->symbol;
        $stockResult = LiveMarket::where('symbol', $stockName)->first();
        return view('search', compact('stockResult'));
    }
}
