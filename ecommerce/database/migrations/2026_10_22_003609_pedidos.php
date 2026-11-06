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
        Schema::create('pedidos', function(Blueprint $table){
            $table->id('cod');
            $table->decimal('valor_total',10,2)->nullable();
            $table->date('data_compra')->nullable();

            $table->foreignId('cliente_cod')
                   ->constrained('clientes','cod')
                   ->onDelete('cascade');
            $table->timestamps(); 
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
