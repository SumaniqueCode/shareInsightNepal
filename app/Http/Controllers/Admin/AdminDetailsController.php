<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminDetailsController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profileImage' => ['required', 'file'],
        ]);
    }

    protected function create(array $data)
    {
        if (isset($data['profileImage'])) {
            $image = $data['profileImage'];
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('user/images/', $image_new_name);
            $imagePath = 'user/images/' . $image_new_name;
        } else {
            $imagePath = 'user/images/default.jpg';
        }

        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'profileImage' => $imagePath,
            'isRole' => 'admin',
        ]);
    }
    public function addAdmins(Request $request)
    {
        $data = $request->all();

        $this->validator($data)->validate();
        $this->create($data);
    
        return redirect('/admins')->with('success', 'Admin added successfully.');
    }
    
}
