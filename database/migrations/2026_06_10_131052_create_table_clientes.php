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
        Schema::create('table_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->date('data_nascimento');
            $table->string('cpf', 11)->unique();
            $table->string('email', 255);
            $table->string('telefone', 11);
            $table->string('estado', 2);
            $table->string('cidade', 50);
            $table->string('status', 7);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_clientes');
    }
};
