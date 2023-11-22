<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    // app/Http/Controllers/ProfileController.php
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profileDisplay()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
        protected function detailsValidator(array $data)
        {
            return Validator::make($data, [
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'string', 'max:255', 'unique:users'],
                'address' => ['required', 'string', 'max:255'],
                // 'password' => ['required', 'string', 'min:8', 'confirmed'],
                // 'profileImage' => ['required', 'file'],
            ]);
        }
    
        protected function updateDetails(array $data)
        {
            // if (isset($data['profileImage'])) {
            //     $image = $data['profileImage'];
            //     $image_new_name = time() . $image->getClientOriginalName();
            //     $image->move('user/images/', $image_new_name);
            //     $imagePath = 'user/images/' . $image_new_name;
            // } else {
            //     $imagePath = 'user/images/default.jpg';
            // }
    
            $user = Auth::user();
            $user->firstName = $data['firstName'];
            $user->lastName = $data['lastName'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->address = $data['address'];
                // 'password' => Hash::make($data['password']),
                // 'profileImage' => $imagePath,
                $user->save();
        }

        public function updateUserDetails(Request $request)
        {
            $data = $request->all();
    
            $this->detailsValidator($data)->validate();
            $this->updateDetails($data);
        
        return redirect()->back()->with('success', 'Profile Updated successfully.');
    }

    protected function passwordValidator(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    protected function updatePassword(array $data)
        {
    
            $user = Auth::user();
            $user->password = Hash::make($data['password']);
                $user->save();
        }
    public function updateUserPassword(Request $request)
        {
            $data = $request->all();
    
            $this->passwordValidator($data)->validate();
            $this->updatePassword($data);
        
        return redirect()->back()->with('success', 'Profile Updated successfully.');
    }

    public function logout()
{
    Auth::logout();
    return view('index');
}
}

