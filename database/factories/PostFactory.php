<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    
    
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(10);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'subtitle' => fake()->sentence(10),
            'description' => fake()->paragraph(5),
            'publish_at' => fake()->dateTime(),
            'category' => function () {
                return Category::factory()->create()->id;
            },
        ];
    }


}
