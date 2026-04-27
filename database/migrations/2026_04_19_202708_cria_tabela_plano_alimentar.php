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
         Schema::create('plano_alimentar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id_nutricionista')->constrained('users')->cascadeOnDelete();
            $table->string('nome');
            $table->text('descricao');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plano_alimentar');
    }
};
