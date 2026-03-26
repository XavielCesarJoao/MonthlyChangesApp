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
        $faker = \Faker\Factory::create('pt_BR');
        
        $prefixos = [
            'Departamento de', 'Gerência de', 'Diretoria de', 
            'Coordenação de', 'Setor de', 'Área de'
        ];
        
        $areas = [
            'Recursos Humanos', 'Tecnologia', 'Marketing', 'Vendas',
            'Financeiro', 'Jurídico', 'Operações', 'Logística',
            'Compras', 'Qualidade', 'Engenharia', 'TI'
        ];
        
        return [
            'nomeDepartamento' => $faker->randomElement($prefixos) . ' ' . $faker->randomElement($areas),
            'empresa_id' => fake()->numberBetween(1, 5),
        ];
    }
}
