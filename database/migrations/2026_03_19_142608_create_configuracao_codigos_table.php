<?php

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
        Schema::create('configuracao_codigos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Empresa::class)->constrained();
            $table->string('codigo');
            $table->string('descricao');
            $table->string('tipo');
            $table->integer('maxLinhasPeriodo')->default(null)->nullable();
            $table->integer('minValorLinha')->nullable();
            $table->integer('maxValorLinha')->nullable();
            $table->integer('maxSomaPeriodo')->nullable();
            $table->integer('listaValoresPossiveis_id')->nullable();
            $table->boolean('domingosAndFeriados')->default(false);
            $table->integer('escondeAteLimite')->nullable();
            $table->integer('mostraAteLimite')->nullable();
            $table->integer('escondeDesdeLimite')->nullable();
            $table->integer('mostraDesdeLimite')->nullable();
            $table->integer('dependeDe')->nullable();
            $table->integer('unicoNoPeriodo')->nullable();
            $table->integer('valorPorDefeito')->nullable();
            $table->string('alteracaomensal_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuracao_codigos');
    }
};
