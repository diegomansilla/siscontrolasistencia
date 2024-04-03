<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;
    public function run(): void
    {
        User::create ([
            'name' => 'Administrador',
            'email' => 'administrador@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('423611di'),
            'fcha_ingreso' => now(),
            'estado' => '1',
            'remember_token' => Str::random(10),
        ]);

        User::create ([
        'name' => 'Secretaria',
        'email' => 'secretaria@admin.com',
        'email_verified_at' => now(),
        'password' => Hash::make('423611di'),
        'fcha_ingreso' => now(),
        'estado' => '1',
        'remember_token' => Str::random(10),
    ]);

    User::create ([
        'name' => 'Cobrador',
        'email' => 'cobranzas@admin.com',
        'email_verified_at' => now(),
        'password' => Hash::make('423611di'),
        'fcha_ingreso' => now(),
        'estado' => '1',
        'remember_token' => Str::random(10),
    ]);
    }
}
