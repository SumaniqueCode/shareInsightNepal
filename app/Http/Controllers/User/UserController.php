<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function userDashboard(){
        // liveMarketData();
        return view('user.index');
    }
    public function services(){
        return view('user.services');
    }
    

    public function liveMarket(){
        liveMarketData();
    return view('user.liveMarket');
    }
}
