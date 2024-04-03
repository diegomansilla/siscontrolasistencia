<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Cuenta con 3 roles. Creando Roles
        $admin = Role::create(['name' => 'admin']);
        $secretaria = Role::create(['name' => 'secretaria']);
        $tesorero = Role::create(['name' => 'cobrador']);

        Permission::create(['name' => 'index'])->syncRoles([$admin,$secretaria,$tesorero]);
        Permission::create(['name' => 'reportes'])->syncRoles([$admin,$secretaria,$tesorero]);
        Permission::create(['name' => 'pdf'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name' => 'pdf_fechas'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name' => 'home'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name' => 'miembros'])->syncRoles([$admin]);
        Permission::create(['name' => 'ministerios'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'asistencias'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name' => 'pagos'])->syncRoles([$admin,$tesorero]);

        User::find(1)->assignRole($admin);
        User::find(2)->assignRole($secretaria);
        User::find(3)->assignRole($tesorero);
    }
}
