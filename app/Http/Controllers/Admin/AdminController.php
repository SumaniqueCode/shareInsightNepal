<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Broker;
use App\Models\Admin\PageViews;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */

     public function adminDashboard(Request $request) {
        if(admincheck()){
         return view('admin.index');
     }else {
        return view('user.index');
     }
    }
     public function customers() {
        $users = User::where('isRole', 'user')->get();
        if(admincheck()){
        return view('admin.customers', compact('users'));
    }else {
        return view('user.index');
     }
    }
    public function brokers() {
        $brokers = Broker::orderBy('brokerId', 'asc')->get();
        if(admincheck()){
        return view('admin.brokers', compact('brokers'));
    }else {
        return view('user.index');
     }
    }
    public function admins() {
                $adminData = User::where('isRole', 'admin')->get();
                if(admincheck()){
        return view('admin.admins', compact('adminData'));
    }else {
        return view('user.index');
     }
    }
}
