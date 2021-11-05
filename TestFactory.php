<?php

namespace Database\Factories;
use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Test::class;
    public function definition()
    {
        return [
            'nombre' =>$this->faker->name,
            'cantidad' =>$this->faker->numberBetween(1,1000),
        
        ];
    }
}
