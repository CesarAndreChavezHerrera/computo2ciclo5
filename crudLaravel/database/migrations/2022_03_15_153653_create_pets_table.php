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
        Schema::create('pets', function (Blueprint $table) {
            //campos para ir a crear la tabla // crear la BD

            $table->increments('id');
            $table->string('name');
            $table->string('color');
            $table->string('edad');
            $table->timestamps(); //crea dos campos, una para la fecha de la creacion del registo y otra para la fecha de la modificacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
