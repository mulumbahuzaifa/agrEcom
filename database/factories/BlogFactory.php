<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $blog_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($blog_name);
        return [
            'name' => $blog_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'image' => 'blog_' .$this->faker->unique(true)->numberBetween(1,8).'.jpg'
        ];
    }
}