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
        Schema::create('itens_pedidos', function(Blueprint $table){
            $table->foreignId('pedidos_cod')
                ->constrained('pedidos', 'cod')
                ->onDelete('cascade');
            $table->foreignId('produtos_cod')
                ->constrained('produtos', 'cod')
                ->onDelete('cascade');
            $table->integer('quantidade')->default(1);
            $table->primary(['pedidos_cod','produtos_cod']);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_pedidos');
    }
};
