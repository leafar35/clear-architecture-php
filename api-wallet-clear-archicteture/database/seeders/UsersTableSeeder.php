<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            "name"=>"Rafael", 
            "email"=>"rafael@gmail.com.br",
            "password"=>Hash::make("123")
        ]);
    }
}
