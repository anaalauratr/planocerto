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
        Schema::create('relacao_cliente', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained('user')->cascadeOnDelete();
          $table->foreignId('plano_alimentar_id')->nullable()->constrained('plano_alimentar')->nullOnDelete();
            $table->text('objetivo');
            $table->date('data_nascimento');
            $table->float('peso');
            $table->float('altura');
             $table->enum('sexo', ['Masculino','Feminino' ]);
             $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('relacao_cliente');
    }
};
