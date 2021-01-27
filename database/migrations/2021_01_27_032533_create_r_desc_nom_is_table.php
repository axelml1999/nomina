<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRDescNomIsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_desc_nom_is', function (Blueprint $table) {
            $table->unsignedBigInteger('nominaind_id');
            $table->unsignedBigInteger('descuento_id');
            $table->decimal('cantidad');
            $table->timestamps();
            $table->foreign('nominaind_id')->references('id')->on('nominas_individuales');
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
        Schema::dropIfExists('r_desc_nom_is');
    }
}
