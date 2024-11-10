<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Room;
use App\Models\User;
use App\Models\Group;
use App\Models\Student;
use App\Models\Payment;
use App\Models\Attendance;
use App\Models\Homework;
use App\Models\Submission;
use App\Models\Video;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::factory()->count(3)->create();

        Room::factory()->count(5)->create();

        User::factory()->count(10)->create();

        Group::factory()->count(5)->create();

        Student::factory()->count(20)->create();

        Payment::factory()->count(30)->create();

        Attendance::factory()->count(50)->create();

        Homework::factory()->count(5)->create();

        Submission::factory()->count(40)->create();

        Video::factory()->count(5)->create();
    }
}

