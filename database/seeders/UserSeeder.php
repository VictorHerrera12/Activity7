<?php

namespace Database\Seeders;
use App\Models\User; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     

        User:: create([
            'user' => 'Admon',
            'rol' => 'Administrativo',
            'email' => 'admon@robotics.com',
            'password' =>'adm@2022',
        ]);

        User:: create([
            'user' => 'Tecmilenio',
            'rol' => 'Profesor',
            'email' => 'tecmilenio@robotics.com',
            'password' =>'adm@2022',
        ]);

        User:: create([
            'user' => 'Estudiante',
            'rol' => 'Estudiante',
            'email' => 'student@robotics.com',
            'password' =>'adm@2022',
        ]);

    }
}
