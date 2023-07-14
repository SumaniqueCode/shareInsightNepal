<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\WatchList;
use Illuminate\Http\Request;

class LiveMarketController extends Controller
{
    public function addToWatchlist(Request $request)
    {
        $watchlist = new WatchList;
        $watchlist->symbolName = $request->symbol;
        $watchlist->save();
        
        // Return a response or redirect as needed
        return redirect()->back()->with('success', 'Symbol added to watchlist successfully.');
    }
}
