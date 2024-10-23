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
            $table->string('bienes_id_cliente');
            $table->string('marca_descripcion');
            $table->string('modelo_nombre_host');
            $table->string('ip');
            $table->string('puerta_de_enlace');
            $table->string('ext');
            $table->string('discado_direct');
            $table->string('direccion');
            $table->string('ubicacion');
            $table->string('rango_ext_piso');
            $table->string('piso');
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
