<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2000; $i++) {
            DB::table("users")->insert([
                '_id' => Str::random(5),
                'name' => Str::random(10),
                'email' => Str::random(10) . "@gmail.com",
                'password' => Hash::make("password"),
            ]);
        }
    }
}
