<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('motivo_id')->unsigned();
            $table->foreign('motivo_id')->references('id')->on('motivos');

            $table->BigInteger('motivos_detalle_id')->unsigned();  
            $table->foreign('motivos_detalle_id')->references('id')->on('motivo_detalles');

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
        Schema::dropIfExists('detalles');
    }
}
