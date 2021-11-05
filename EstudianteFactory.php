<?php

namespace Database\Factories;
use App\Models\EstudianteModel;
use Illuminate\Database\Eloquent\Factories\Factory;
/*
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('nota')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('identidad')->unique();
            $table->string('cuenta')->unique();
            */


class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = EstudianteModel::class;
    public function definition()
    {
        return [
            'nombre' =>$faker->firstName,
            'apellido' =>$faker->lastName,
            'nota' =>$faker->numberBetween(0,100),
            'fecha_nacimiento' =>$faker->dateTimeBetween('-40 years','-16 years' ),
            'identidad' =>$faker->numerify('####-')
            . $faker->numberBetween(1950,2005)
            .$faker->unique()->numerify('-#####'),
            'cuenta' =>$faker->numerBetween(2007, 2020).'250'.$faker->unique()->numerify('####')
        ];
    }
}
