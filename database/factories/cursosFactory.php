<?php

namespace Database\Factories;
use App\Models\Cursos;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cursos>
 */
 
class cursosFactory extends Factory
{
    protected $model = Cursos::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'key' => $this->faker->randomNumber(6, true),
            'titulo' => $this->faker->sentence(),
            'contenido' => $this->faker->paragraph(),
            'portada' => $this->faker->sentence(),
        ];
    }
}
