<?php

namespace Database\Seeders;
use App\Models\Cursos; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cursos::factory(100)->create();
    }
}
