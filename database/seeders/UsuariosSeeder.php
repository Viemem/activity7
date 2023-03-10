<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('usuarios')->insert([
            'NombreUsuario' => 'Admon',
            'Email' => 'admon@robotics.com',
            'Contraseña' => 'Adm@2022 ',
            'Rol' => 'Administrativo',
        ]);

        DB::table('usuarios')->insert([
            'NombreUsuario' => 'Tecmilenio',
            'Email' => 'tecmilenio@robotics.com',
            'Contraseña' => 'Adm@2022 ',
            'Rol' => 'Profesor',
        ]);

        DB::table('usuarios')->insert([
            'NombreUsuario' => 'Estudiante',
            'Email' => 'student@robotics.com',
            'Contraseña' => 'Adm@2022 ',
            'Rol' => 'Estudiantes',
        ]);

    }
}
