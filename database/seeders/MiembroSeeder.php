<?php

namespace Database\Seeders;

use App\Models\Miembro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MiembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Miembro::factory()->count(150)->create();
        /*Miembro::create([
            'nombre_apellido' => 'Ejemplo 1',
            'direccion' => 'Lorem ipsum',
            'telefono' => '3436 454925',
            'fcha_nacimiento' => '2001-10-10',
            'genero' => 'Masculino',
            'email' => Str::random(10).'@gmail.com',
            'estado' => '1',
            'ministerio' => 'Santo',
            'imagen' => 'img.jpg',
            'fcha_ingreso' => '2020-10-10'
        ]);*/

    }
}
