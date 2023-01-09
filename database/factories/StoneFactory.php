<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stone>
 */
class StoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name'=>$this->faker->word(),
             'composition_chimique'=>$this->faker->sentence(3) ,
             'density'=>$this->faker->randomDigit(),
             'hardness'=>$this->faker->biasedNumberBetween($min = 1, $max = 8, $function = 'sqrt'),
             'chakra'=>$this->faker->sentence(3,true),
            'system_cristalin'=>$this->faker->word(),
            'origin'=>$this->faker->sentence(3,true),
            'scarcity'=>$this->faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
            'properties'=>$this->faker->text($maxNbChars = 50),
            'purification'=>$this->faker->sentence(3),
            'image'=>$this->faker->imageUrl(),

        ];
    }
}
