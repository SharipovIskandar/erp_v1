<?php

// database/factories/HomeworkFactory.php
namespace Database\Factories;

use App\Models\Homework;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    protected $model = Homework::class;

    public function definition(): array
    {
        return [
            'group_id' => Group::factory(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'due_date' => $this->faker->date(),
        ];
    }
}

