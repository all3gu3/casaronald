<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroOperativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_operativo', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('nino_id');
            $table->foreign('nino_id')->references('id')->on('nino');
            $table->unsignedBigInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on('hospital');
            $table->unsignedBigInteger('tipo_ninio_id');
            $table->foreign('tipo_ninio_id')->references('id')->on('tipo_ninio');
            $table->unsignedBigInteger('tipo_tratamiento_id');
            $table->foreign('tipo_tratamiento_id')->references('id')->on('tipo_tratamiento');
            $table->unsignedBigInteger('tipo_dieta_id');
            $table->foreign('tipo_dieta_id')->references('id')->on('tipo_dieta');
            $table->unsignedBigInteger('trabajador_social_id');
            $table->foreign('trabajador_social_id')->references('id')->on('trabajador_social');

            $table->date('fecha_ingreso');
            $table->date('fecha_egreso');

            $table->string('medico_atiende');
            $table->string('diagnostico');

            $table->integer('reingreso');
            $table->integer('ninos_adicionales');
            $table->integer('habitacion');

            $table->string('observaciones')->nullable();

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
        Schema::dropIfExists('registro_operativo');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
