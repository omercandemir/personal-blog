<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Proje::factory(12)->create(); // random user oluşturma UserFactory'e gider.
    }
}
