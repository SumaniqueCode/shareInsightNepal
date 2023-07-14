<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Broker;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function adminDashboard() {
         return view('admin.index');
     }
     public function customers() {
        $users = User::where('isRole', 'user')->get();
        return view('admin.customers', compact('users'));
    }
    public function brokers() {
        $brokers = Broker::orderBy('brokerId', 'asc')->get();
        return view('admin.brokers', compact('brokers'));
    }
    public function admins() {
                $adminData = User::where('isRole', 'admin')->get();
        return view('admin.admins', compact('adminData'));
    }
}
