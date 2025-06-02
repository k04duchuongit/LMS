<?php
namespace Database\Factories\Infrastructure\Models;

use App\Infrastructure\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class StudentFactory extends Factory
{
    protected $model = \App\Infrastructure\Models\Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_code' => $this->faker->unique()->numerify('STU-#####'),
            'user_id' => User::factory(),
        ];
    }
}
