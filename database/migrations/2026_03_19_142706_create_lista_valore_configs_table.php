<?php

use App\Models\Internal\ConfiguracaoCodigo;
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
        Schema::create('lista_valore_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ConfiguracaoCodigo::class)->constrained();
            $table->string('valor');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lista_valore_configs');
    }
};
