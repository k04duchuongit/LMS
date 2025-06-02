<?php

namespace Database\Seeders;

use App\Infrastructure\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Lecturer::factory(10)->create();
    }
}
