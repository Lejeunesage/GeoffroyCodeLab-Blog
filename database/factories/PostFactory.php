<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
        $title = fake()->realText(50);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => fake()->imageUrl,
            'body' => fake()->realText(5000),
            'active' => fake()->boolean,
            'meta_title'  => fake()->sentence(6), 
            'meta_description'  => fake()->paragraph(3),
            'published_at' => fake()->dateTime,
            'user_id' => 1

      ];
    }
}
