<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $course_name = $this->faker->words(rand(3, 5), true);
        $price = $this->faker->numberBetween($min = 500, $max = 1000);
        $discount = $this->faker->numberBetween($min = 1, $max = 10);
        $after_discount = ($price - ($price * $discount * 0.01));
        return [
            'product_name' => $course_name,
            // 'slug' => Str::slug($course_name),
            'product_real_amount' => $price,
            'product_percentage_discount' => $discount,
            'product_discounted_amount' => $after_discount,
            'product_sizes' => $this->faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
            'product_colors' => $this->faker->randomElement(['Black', 'Blue', 'Red']),
            'product_image' => '["6408b44016c96.gif"]',
            'product_detail' => $this->faker->paragraph(rand(3, 8)),
        ];
    }
}
