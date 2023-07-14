<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'firstName'=>'Suman',
            'lastName'=>'Regmi',
            'email'=>'admin@gmail.com',
            'phone'=>'9811078787',
            'address'=>'Morang, Nepal',
            'password'=>Hash::make('password'),
            'profileImage'=>'user/images/mainAdmin.jpg',
            'isRole'=> 'admin'
        ]);
    }
}
