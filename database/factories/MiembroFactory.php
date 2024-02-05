<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_apellido' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => random_int(70000000,79999999),
            'fcha_nacimiento' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'genero' => 'Masculino',
            'email' => fake()->unique()->safeEmail(),
            'estado' => '1',
            'ministerio' => 'Santo',
            'imagen' => 'img.jpg',
            'fcha_ingreso' => fake()->date($format = 'Y-m-d'),
        ];
    }
}
