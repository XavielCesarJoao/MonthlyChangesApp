<?php

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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeEmpresa');
            $table->string('host')->unique();
            $table->string('bd')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('user_api')->nullable();
            $table->string('password_api')->nullable();
            $table->string('company')->nullable();
            $table->string('line')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
