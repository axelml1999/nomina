<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominasIndividualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas_individuales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('nominagen_id');
            $table->unsignedBigInteger('extra_id');
            $table->unsignedBigInteger('descuento_id');
            $table->timestamps();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('nominagen_id')->references('id')->on('nominas_generales');
            $table->foreign('extra_id')->references('id')->on('extras');
            $table->foreign('descuento_id')->references('id')->on('descuentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominas_individuales');
    }
}
