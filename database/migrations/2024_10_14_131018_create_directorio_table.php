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
        Schema::create('directorio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->string('direccion');
            $table->string('direccion_mac');
            $table->string('piso');
            $table->string('ext');
            $table->string('marca');
            $table->string('descripcion');
            $table->string('modelo');
            $table->string('nombre_host');
            $table->string('puerto_enlace');
            $table->string('ip');
            $table->string('discado_directo');
            $table->string('ubicacion');
            $table->string('rango_ext');
            $table->string('piso_ext');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directorio');
    }
};