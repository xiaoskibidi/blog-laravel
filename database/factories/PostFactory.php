<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

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
        return [
            'title' => fake()->sentence(),
            'slug' => Str::slug(fake()->sentence()),
            //App\Models\Post::factory(20)->recycle(User::factory(5)->create())->create()
            //perintah untuk membuat data post berdasarkan user
            'author_id' => User::factory(),
            'body' => fake()->paragraph(),
        ];
    }
}
