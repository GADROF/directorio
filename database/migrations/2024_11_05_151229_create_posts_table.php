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

            // Cambiamos marca_descripcion a unsignedBigInteger para que sea una clave foránea
            $table->unsignedBigInteger('marca_descripcion')->nullable(); 
            
            $table->string('modelo_nombre_host')->nullable();
            $table->string('discado_direct')->nullable();

            // Definimos las claves foráneas
            $table->unsignedBigInteger('direccion_id')->nullable();
            $table->unsignedBigInteger('ubicacion_id')->nullable();
            $table->unsignedBigInteger('piso_id')->nullable();

            $table->string('status');
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('set null');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('set null');
            $table->foreign('piso_id')->references('id')->on('pisos')->onDelete('set null');
            $table->foreign('marca_descripcion')->references('id')->on('marca_descripciones')->onDelete('set null');
            $table->timestamps();
        });

    //     // Agregamos las relaciones de clave foránea después de crear la tabla
    //     Schema::table('posts', function (Blueprint $table) {
    //         if (Schema::hasTable('direcciones')) {
    //             $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('set null');
    //         }
    //         if (Schema::hasTable('ubicaciones')) {
    //             $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('set null');
    //         }
    //         if (Schema::hasTable('pisos')) {
    //             $table->foreign('piso_id')->references('id')->on('pisos')->onDelete('set null');
    //         }
            
    //         // Agregamos la clave foránea para marca_descripcion
    //         if (Schema::hasTable('marca_descripciones')) { // Asegúrate de que esta tabla exista
    //             $table->foreign('marca_descripcion')->references('id')->on('marca_descripciones')->onDelete('set null');
    //         }
    //     });
    // 
    
//}

    /**
     * Reverse the migrations.
     */
    //public function down(): void
    //{
        //Schema::dropIfExists('posts');
    }
};