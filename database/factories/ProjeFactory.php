<?php

namespace Database\Factories;

use App\Models\Proje;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'proje_adi'         => $this->faker->company,
            'proje_aciklama'    => $this->faker->address,
            'proje_resim'       => 'home/img/main/42.jpg',
            'proje_yazi'        => 'proje örnek yazısıdır.',
            'slug'              => Str::slug($this->faker->name)

        ];
    }
}
