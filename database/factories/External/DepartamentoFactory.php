<?php

namespace Database\Factories\External;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\External\Departamento>
 */
class DepartamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
             $faker = \Faker\Factory::create('pt_BR'); // <- aqui
        return [
            //
            'nomeDepartamento' => fake()->word(),
            'empresa_id' => fake()->numberBetween(1, 5),
        ];
    }
}
