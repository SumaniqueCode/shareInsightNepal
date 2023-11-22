<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Broker;
use App\Models\User\LiveMarket;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function broker() {
        $brokers = Broker::orderBy('brokerId', 'asc')->get();
        return view('user.brokerlist', compact('brokers'));
    }

    public function indices(){
        indexData();
        return view('user.indices');
    }
    public function ipoResult(){
        return view('user.ipoResult');
    }

    public function topStocks(){
        liveMarketData();
        $topgainers = LiveMarket::orderBy('percentChange', 'desc')->take(10)->get();
        $toploosers = LiveMarket::where('percentChange', '<', 0)->orderBy('percentChange', 'desc')->take(10)->get();
        
        $topturnovers = LiveMarket::selectRaw('*, (volume * ltp) as turnover')
        ->orderBy('turnover', 'desc')
        ->take(10)
        ->get();


        return view ('user.topStocks',compact('topgainers','toploosers','topturnovers'));
    }
}
