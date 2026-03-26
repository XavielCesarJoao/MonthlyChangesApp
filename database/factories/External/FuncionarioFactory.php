<?php

namespace Database\Factories\External;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\External\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('pt_BR'); // <- aqui
        return [
            'nome' => $this->faker->name(),
            'numeroFuncionario' => $this->faker->unique()->numerify('FUNC-####'),
            'departamento_id' => fake()->numberBetween(1, 25),
            'empresa_id' => fake()->numberBetween(1, 5),
        ];
    }
}
