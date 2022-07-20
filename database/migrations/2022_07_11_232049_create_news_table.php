<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            // Esto es para hacer la coneccion de la llave foranea 
            $table->foreignId('categories_id')->constrained();
            $table->string('title');
            $table->string('subtitle');
            $table->mediumtext('description');
            // esta instruccion crea el campo de la fecha de creado y la de actualizado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};