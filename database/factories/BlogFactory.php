<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'baslik'        => $this->faker->catchPhrase,
            'yazi'          => $this->faker->text($maxNbChars = 500),
            'yazar'         => 'Ömer Can',
            'resim'         => 'home/img/main/5.jpg',
            'slug'          => Str::slug($this->faker->name),
            'kategori_id'   => 5
        ];
    }
}
