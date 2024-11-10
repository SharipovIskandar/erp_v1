<?php

// database/factories/SubmissionFactory.php
namespace Database\Factories;

use App\Models\Submission;
use App\Models\Homework;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubmissionFactory extends Factory
{
    protected $model = Submission::class;

    public function definition(): array
    {
        return [
            'homework_id' => Homework::factory(),
            'student_id' => Student::factory(),
            'answer' => $this->faker->paragraph(),
        ];
    }
}

