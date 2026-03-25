<?php

namespace Database\Factories\Internal;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internal\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nomeEmpresa' => fake()->company(),
            'host' => fake()->unique()->domainName(),
            'bd' => fake()->unique()->word(),
            'username' => fake()->userName(),
            'password' => fake()->password(),
            'user_api' => fake()->userName(),
            'password_api' => fake()->password(),
            'company' => fake()->company(),
            'line' => fake()->word(),
        ];
    }
}
