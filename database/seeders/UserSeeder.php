<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'name'  => 'Ömer Can',
            'email' => 'reatweb@gmail.com',
            'user_type'  => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$9fxtE7fe2tPuMNzvF/WKu.y8r1xg6cmAsN58yZU/B1YiLS2jaybwi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
