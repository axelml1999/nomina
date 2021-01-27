<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRExtrasnomIsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_extrasnom_is', function (Blueprint $table) {
            $table->unsignedBigInteger('nominaind_id');
            $table->unsignedBigInteger('extra_id');
            $table->decimal('cantidad');
            $table->timestamps();
            $table->foreign('nominaind_id')->references('id')->on('nominas_individuales');
            $table->foreign('extra_id')->references('id')->on('extras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_extrasnom_is');
    }
}
