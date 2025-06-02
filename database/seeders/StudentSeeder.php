<?php

namespace Database\Seeders;

use App\Infrastructure\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Student::factory()->count(1)->create();
    }
}
