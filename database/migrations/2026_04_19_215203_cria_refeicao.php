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
        Schema::create('refeicao', function (Blueprint $table) {
            $table->id();
           $table->foreignId('plano_alimentar_id')->constrained('plano_alimentar')->cascadeOnDelete();
           $table->string('nome', 100);
            $table->text('descricao');
            $table->time('horario');
           $table->integer('calorias');
             $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('refeicao');
    }
};
