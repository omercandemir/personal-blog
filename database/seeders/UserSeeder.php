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
            'name'  => 'Admin',
            'email' => 'admin@admin.com',
            'user_type'  => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$Tyrep/RFkz10LI99qHQ/r.atOPZXwA1WQVsaaGSii7srirCA9JBny', // 123456
            'remember_token' => Str::random(10),
        ]);
    }
}
