<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cliente_favorito', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_laboratorio');
            $table->unsignedBigInteger('id_cliente');

            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->foreign('id_laboratorio')->references('id')->on('laboratorio');
            $table->foreign('id_cliente')->references('id')->on('cliente');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente_favorito');
    }
};
