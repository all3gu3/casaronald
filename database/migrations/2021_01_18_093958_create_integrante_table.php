<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('familia_id');
            $table->foreign('familia_id')->references('id')->on('familia');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role');
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('es_paciente');
            $table->date('fecha_nacimiento');
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
        Schema::dropIfExists('integrante');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
