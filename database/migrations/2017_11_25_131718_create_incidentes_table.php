<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');

            $table->integer('id_responsable')->unsigned();
            $table->integer('id_cañonera')->unsigned();

            $table->timestamps();

            // relaciones
            $table->foreign('id_responsable')->references('id')->on('personas')->onDelete('restrict');
            $table->foreign('id_cañonera')->references('id')->on('cañoneras')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidentes');
    }
}
