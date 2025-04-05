<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' =>fake()->paragraph(),
            'price' =>fake()->randomFloat(2,10000,3000000),
            'category_id'=> Category::inRandomOrder()->first()->id,
            'url_image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJWZXRfiNaoy3ETnrtiTy6PbWTK53OBtujyQ&s'
            
        ];
    }
}
