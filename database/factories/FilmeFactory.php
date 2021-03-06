<?php

namespace Database\Factories;

use App\Models\Filme;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Filme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'avaliacao' => $this->faker->numberBetween(1,5),
            'genero_id' => $this->faker->numberBetween(1,4),
            'created_at' => now()            
        ];
    }
}
