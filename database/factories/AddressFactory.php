<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        return [
            'user_id' => $users->random()->id,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->randomElement(['22222222222', '23456785233']),
            'line1' =>  $this->faker->paragraph(rand(1, 2)),
            'line2' =>  $this->faker->paragraph(rand(1, 3)),
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'postal_code' => $this->faker->randomElement(['2777777', '388888', '598393', '412345']),
        ];
    }
}
