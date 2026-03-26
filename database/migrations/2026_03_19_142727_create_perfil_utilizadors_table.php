<?php

use App\Models\External\Departamento;
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
        Schema::create('perfil_utilizadors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Internal\Perfil::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->foreignIdFor(Departamento::class)->nullable()->constrained();
            $table->boolean('isAdmin')->default(false);
            $table->boolean('ativo')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_utilizadors');
    }
};
