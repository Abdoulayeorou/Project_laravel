<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
            "name"=>"Admin",
            "email"=>"Admin@gmail.com",
            "password"=>Hash::make("passsword"),
            "role_id"=>1,
         ]);
         User::create([
            "name"=>"Manager",
            "email"=>"manager@gmail.com",
            "password"=>Hash::make("passsword"),
            "role_id"=>2,
         ]);

         User::create([
            "name"=>"User",
            "email"=>"user@gmail.com",
            "password"=>Hash::make("passsword"),
            "role_id"=>3,
         ]);
    }
}
