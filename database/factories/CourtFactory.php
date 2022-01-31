<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'mobileNumber' => $this->faker->phoneNumber(),
            'region_id' => $this->faker->numerify('#'),
            'barangay_id' => $this->faker->numerify('#'),
            'city_id' => $this->faker->numerify('#'),
            'province_id' => $this->faker->numerify('#'),
            'country_id' => $this->faker->numerify('#'),
        ];
    }
}
