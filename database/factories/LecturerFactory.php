<?php

namespace Database\Factories;

use App\Infrastructure\Models\User;
use App\Infrastructure\Models\Lecturer;  
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class LecturerFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lecturer_code' => $this->faker->unique()->numerify('LCT-#####'),
            'user_id' => User::factory(),
        ];
    }
}
