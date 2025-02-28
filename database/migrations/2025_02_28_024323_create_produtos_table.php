<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do produto
            $table->text('descricao')->nullable(); // Descrição (opcional)
            $table->decimal('preco', 8, 2); // Preço (8 dígitos no total, 2 decimais)
            $table->integer('quantidade_estoque'); // Quantidade em estoque
            $table->timestamps(); // created_at e updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
