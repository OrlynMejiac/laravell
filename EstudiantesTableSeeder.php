<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\EstudianteModel;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstudianteModel::factory(100)->create();
    }
}
