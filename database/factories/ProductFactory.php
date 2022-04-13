<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4, $asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'ram' => $this->faker->text(40),
            'model' => $this->faker->text(40),
            'config' => $this->faker->text(40),
            'config1' => $this->faker->text(40),
            'config2' => $this->faker->text(40),
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1,22).'.jpg',
        ];
    }
}
