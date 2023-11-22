<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\LiveMarket;
use App\Models\User\WatchList;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function watchlist(){
        liveMarketData();
        return view('user.watchlist');
    }
    public function deleteWatchlistStock(string $symbol)
    {
        $watchList = WatchList::where('symbolName', $symbol)->first();
       $watchList->delete();

        // Return a response or redirect as needed
        return redirect()->back()->with('success', 'Watchlist deleted successfully.');
    }
}
