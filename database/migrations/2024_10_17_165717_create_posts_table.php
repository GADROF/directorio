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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('direccion_mac');
            $table->string('serial');
            $table->string('bienes_id_cliente');
            $table->string('ext');
            $table->string('ip');
            $table->string('puerta_de_enlace');
            $table->string('marca_descripcion')->nullable();
            $table->string('modelo_nombre_host')->nullable();
            $table->string('discado_direct')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('piso');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};