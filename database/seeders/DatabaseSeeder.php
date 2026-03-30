<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\External\Departamento;
use App\Models\External\Funcionario;
use App\Models\Internal\ConfiguracaoCodigo;
use App\Models\Internal\Empresa;
use Database\Factories\Internal\ConfiguracoesCodigoFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(50)->create();
         Empresa::factory()->count(5)->create();
         Departamento::factory()->count(25)->create();
         Funcionario::factory()->count(500)->create();
       //  ConfiguracaoCodigo::factory()->count(60)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
