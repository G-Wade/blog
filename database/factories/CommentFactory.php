<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $accounts = Account::all();
        $posts = Post::all();
        return [
            'content' => fake()->sentence(),
            'account_id' => fake()->numberBetween(1, $accounts->count()),
            'post_id' => fake()->numberBetween(1, $posts->count()),
        ];
    }
}

