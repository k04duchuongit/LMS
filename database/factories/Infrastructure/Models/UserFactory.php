<?php

namespace Database\Factories\Infrastructure\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Infrastructure\Models\User>
 */
class UserFactory extends Factory
{

    protected $model = \App\Infrastructure\Models\User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => Hash::make('11111111'),
            'number_phone' => $this->faker->phoneNumber(),
        ];
    }
}
