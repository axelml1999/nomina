<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->char('lunes');
            $table->char('martes');
            $table->char('miercoles');
            $table->char('jueves');
            $table->char('viernes');
            $table->char('sabado');
            $table->char('domingo');
            $table->unsignedBigInteger('nominaind_id');
            $table->foreign('nominaind_id')->references('id')->on('nominas_individuales');
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
        Schema::dropIfExists('asistencias');
    }
}
