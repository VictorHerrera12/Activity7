<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
public function run()
{
    $this->call(UserSeeder::class);
    $this->call(KitSeeder::class);

    \App\Models\Course::factory(100)->create();
}
}
