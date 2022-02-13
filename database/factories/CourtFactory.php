<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
            'court' => $this->faker->title(),
            'slug' => Str::slug($this->faker->sentence,'-'),
            'description' => $this->faker->paragraph(),
            'status' => 'active',
            'mobileNumber' => $this->faker->phoneNumber(),
            'region_id' => $this->faker->numerify('#'),
            'barangay_id' => $this->faker->numerify('#'),
            'city_id' => $this->faker->numerify('#'),
            'province_id' => $this->faker->numerify('#'),
            'country_id' => $this->faker->numerify('#'),
            'user_id' => '2',
            'price' => '10000'
        ];
    }
}
