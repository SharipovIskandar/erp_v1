<?php

// database/factories/AttendanceFactory.php
namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'date' => $this->faker->date(),
            'status' => $this->faker->boolean(),
        ];
    }
}

