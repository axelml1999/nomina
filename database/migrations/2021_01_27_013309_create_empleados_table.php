<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('curp', 18);
            $table->string('direccion', 150);
            $table->integer('salario');
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('turno_id');
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('pago_id');
            $table->unsignedBigInteger('sexo_id');
            $table->timestamps();
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('pago_id')->references('id')->on('pagos');
            $table->foreign('sexo_id')->references('id')->on('sexos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
