<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Broker;
use Illuminate\Http\Request;

class BrokerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function addBrokers( Request $request)
    {
        $brokers = new Broker;
        $brokers->brokerId = $request->brokerId;
        $brokers->brokerName = $request->brokerName;
        $brokers->brokerPhone = $request->brokerPhone;
        $brokers->brokerAddress = $request->brokerAddress;
        $brokers->brokerTms = $request->brokerTms;

        $brokers->save();
        
        return redirect()->back()->with('success', 'Broker added to the List successfully.');
    }
}
