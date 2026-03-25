<?php

use App\Models\External\Departamento;
use App\Models\External\Funcionario;
use App\Models\Internal\Empresa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registo_altacao_mensais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Funcionario::class)->constrained();
            $table->foreignIdFor(Departamento::class)->constrained();

            $table->date('data'); // único campo de data
            $table->integer('ano')->nullable();
            $table->integer('mes')->nullable();

            $table->enum('tipo_vencimento', [1, 2, 3]); // ou tabela própria
            $table->enum('tipo_alteracao', ['F', 'H','R']);

            $table->string('codigo')->nullable();

            $table->string('moeda', 10)->default('AKZ');

            $table->decimal('quantidade', 15, 2)->nullable();
            $table->decimal('valor', 15, 2)->nullable();

            $table->text('observacao')->nullable();

            $table->string('linha_externa')->nullable(); // nome melhor

            $table->foreignId('user_registo_id')->nullable()->constrained('users');

            $table->enum('estado', ['pendente', 'aprovado', 'rejeitado'])->default('pendente');

            $table->enum('etapa', [
                'administrativo_rh',
                'administrativo',
                'gestor_cc',
                'tecnico_rh',
                'supervisor_rh',
                'primavera'
        ])->default('administrativo');

        $table->foreignId('empresa_id')->constrained('empresas')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registo_altacao_mensals');
    }
};
