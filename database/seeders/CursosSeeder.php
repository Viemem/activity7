<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;


class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Curso::factory()->count(100)->create();



        /*
        DB::table('cursos')->insert([
            'LlaveCurso' => 'Rob101',
            'KitRobotica' => 'Starter Kit',
            'NombreCurso' => 'Introduction to Robotics',
        ]);

        DB::table('cursos')->insert([
            'LlaveCurso' => 'Rob102',
            'KitRobotica' => 'Starter Kit',
            'NombreCurso' => 'Introduction to Automation',
        ]);
        
        DB::table('cursos')->insert([
            'LlaveCurso' => 'Rob103',
            'KitRobotica' => 'Educational Robotics Kit',
            'NombreCurso' => 'Programming for Robotics',
        ]);

        DB::table('cursos')->insert([
            'LlaveCurso' => 'Rob104',
            'KitRobotica' => 'Kit5',
            'NombreCurso' => 'Characteristics of a Robot',
        ]);
        */
    }
}
