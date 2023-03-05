<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;

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
        $accounts = Account::all();
        return [
            'title' => fake()->words(5, true),
            'body' => fake()->paragraph(),
            'account_id' => fake()->numberBetween(1, $accounts->count()),
        ];
    }
}

