<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'LlaveCurso' =>  $this->faker->numberBetween(105, 204),
            'KitRobotica' =>  $this->faker->numerify('Kit-###'),
            'NombreCurso' =>  $this->faker->word(),



        ];
    }
}
