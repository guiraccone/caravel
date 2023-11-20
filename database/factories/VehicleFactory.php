<?php

namespace Database\Factories;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'price'=> $this->faker->randomFloat(2, 0, 100000),
            'year'=> $this->faker->randomNumber(4, false),
            'description'=> $this->faker->text(),
            'slug' => Str::slug($name),
            'img' => $this->faker->imageUrl(400, 400),
            'car_model_id' => CarModel::pluck('id')->random(),
        ];
    }
}
