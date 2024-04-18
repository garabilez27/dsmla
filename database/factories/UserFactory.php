<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usr_fname' => fake()->name(),
            'usr_lname' => fake()->name(),
            'usr_email' => fake()->unique()->safeEmail(),
            'usr_password' => static::$password ??= Hash::make('password'),
            'rl_id' => rand(0,1),
        ];
    }
}
