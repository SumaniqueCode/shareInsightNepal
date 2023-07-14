<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Broker;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function broker() {
        $brokers = Broker::orderBy('brokerId', 'asc')->get();
        return view('user.brokerlist', compact('brokers'));
    }
}
