<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detencions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('equipo_id')->unsigned();
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->char('turno',2);
            $table->decimal('delta', 8, 2);
            $table->bigInteger('motivo_id')->unsigned();
            $table->foreign('motivo_id')->references('id')->on('motivos');
            $table->bigInteger('motivo_detalle_id')->unsigned();
            $table->foreign('motivo_detalle_id')->references('id')->on('motivo_detalles');
            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->bigInteger('imputacion_id')->unsigned();
            $table->foreign('imputacion_id')->references('id')->on('imputacions');

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
        Schema::dropIfExists('detencions');
    }
}
