<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;

class KitSeeder extends Seeder
{
public function run()
{
    Course::create([
        'course_key' => 'KIT1',
        'title' => 'Starter Kit',
        'robotics_kit' => 'StarterKit'
    ]);

    Course::create([
        'course_key' => 'KIT2',
        'title' => 'Educational Kit',
        'robotics_kit' => 'Educational Robotics Kit'
    ]);

    Course::create([
        'course_key' => 'KIT3',
        'title' => 'Advanced Kit',
        'robotics_kit' => 'Kit5'
    ]);
}
}
