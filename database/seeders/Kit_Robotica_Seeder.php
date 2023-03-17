<?php

namespace Database\Seeders;
use App\Models\Kit_Robotica; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kit_Robotica_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
 
        Kit_Robotica:: create([
            'kit_robotica' => 'StarterKit',
  
        ]);

        Kit_Robotica:: create([
            'kit_robotica' => 'Educational Robotics Kit',

        ]);

        Kit_Robotica:: create([
            'kit_robotica' => 'Kit5',
 
        ]);

    }
}
