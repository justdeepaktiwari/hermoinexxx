<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        $products = Product::all();
        return [
            'user_id' => $users->random()->id,
            'product_id' => $products->random()->id,
            'rating' => $this->faker->randomElement(['2', '3', '5', '4']),
            'description' => $this->faker->paragraph(rand(3, 8)),
            'title' => $this->faker->paragraph(rand(3, 8)),
            'status' => $this->faker->randomElement(['verify', 'pending']),
        ];
    }
}
