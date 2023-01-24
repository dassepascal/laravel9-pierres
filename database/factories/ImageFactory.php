<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Stone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
// $stones = Stone::all();
// $images = Image::all();

        return [
            'name' =>$this->faker->word(),
            'image'=>$this->faker->imageUrl(),
            'stone_id'=>$this->faker->numberBetween($min = 1, $max = 30) // 8567


        ];
    }
}
