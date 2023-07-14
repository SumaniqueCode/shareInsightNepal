<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function userDashboard(){
        return view('user.index');
    }
    public function services(){
        return view('user.services');
    }

    public function portfolio(){
        return view('user.portfolio');
    }

    public function liveMarket(){

    return view('user.liveMarket');
    }

    public function watchlist(){
        return view('user.watchlist');
    }

    public function profile(){
        return view('profile');
    }
}
