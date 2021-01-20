<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_entradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('qr');
            $table->integer('integrante_id');
            //$table->foreign('integrantes_id')->references('id')->on('integrantes');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('registro_entradas');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
