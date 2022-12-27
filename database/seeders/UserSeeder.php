<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'name' => 'Agus Sitorus',
                'no_ktp' => '1234567890123456',
                'no_hp' => '082274168228',
                'email' => 'agussitorus24@gmail.com',
                'password' => Hash::make('agus321'),
                'is_admin' => 1
            ],
        );
        foreach($data AS $d){
            User::create([
                'name' => $d['name'],
                'no_ktp' => $d['no_ktp'],
                'no_hp' => $d['no_hp'],
                'email' => $d['email'],
                'password' => $d['password'],
                'is_admin' => $d['is_admin']
            ]);
        }
    }
}
