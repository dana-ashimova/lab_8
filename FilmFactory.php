<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Provider\Base;
use Faker\Provider\en_US\Company;

class FilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
             'title'=>$this->faker->jobTitle,
            'genre'=>$this->faker->name,
            'producer'=>$this->faker->name,
            'rating'=>$this->faker->randomDigit,
        ];
    }
}
