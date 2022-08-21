<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{

    public function up()
    {
        Schema::create('images', function (Blueprint $table) {

            // ID para la tabla de la BDD
            $table->id();

            // columnas para la tabla de la BDD
            $table->string('path');
            $table->morphs('imageable');

            // columnas especiales para la tabla de la BDD
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('images');
    }
}