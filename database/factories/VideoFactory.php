<?php

namespace Database\Factories;

use App\Models\Video;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    protected $model = Video::class;

    public function definition(): array
    {
        return [
            'group_id' => Group::factory(),
            'title' => $this->faker->word(),
            'url' => $this->faker->url(),
        ];
    }
}

