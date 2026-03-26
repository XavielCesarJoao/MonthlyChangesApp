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
         $faker = \Faker\Factory::create('pt_BR'); // <- aqui
        return [
            //
            'nomeEmpresa' =>  $faker->company(),
            'host' => $faker->unique()->domainName(),
            'bd' => $faker->unique()->word(),
            'username' => $faker->userName(),
            'password' => $faker->password(),
            'user_api' => $faker->userName(),
            'password_api' => $faker->password(),
            'company' => $faker->company(),
            'line' => $faker->word(),
        ];
    }
}
