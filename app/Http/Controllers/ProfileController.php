<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // app/Http/Controllers/ProfileController.php


    public function profileDisplay($id)
    {
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }
}

