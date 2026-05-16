<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "username"=>"zoro",
            "cin"=>"FB00112233",
            "first_name"=>"zakariyae",
            "last_name"=>"abbih",
            "email"=>"hello-world@001.com",
            "role"=>"admin",
            "status"=>"active",
            "password"=>"zoro001@@**",
            "city_id"=>2,
        ]);
    }
}
