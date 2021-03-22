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
            $table->string('empleado_id');
            $table->decimal('nominagen_id');
            $table->decimal('total_nom');
            $table->timestamps();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('nominagen_id')->references('id')->on('nominas_generales');
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
