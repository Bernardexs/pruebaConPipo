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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_producto");
            $table->double("precio");
            $table->integer("cantidad");
            $table->date("fechaDeIngreso");
            $table->boolean('estado')->default(true);
            $table->foreignId('id_tiposProducto')->constrained('tipos_producto');






        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
