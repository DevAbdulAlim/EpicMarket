<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'category_id' => \App\Models\Category::factory(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}