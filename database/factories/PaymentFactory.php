<?php

// database/factories/PaymentFactory.php
namespace Database\Factories;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'payment_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['completed', 'pending', 'failed']),
        ];
    }
}

