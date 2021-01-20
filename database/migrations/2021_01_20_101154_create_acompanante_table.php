<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcompananteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompanante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('edad');
            $table->string('sexo');
            $table->string('identificacion')->nullable();
            $table->string('tratamiento')->nullable();

            $table->unsignedBigInteger('parentesco_id');
            $table->foreign('parentesco_id')->references('id')->on('parentesco');
            $table->unsignedBigInteger('escolaridad_id');
            $table->foreign('escolaridad_id')->references('id')->on('escolaridad');
            $table->unsignedBigInteger('nino_id');
            $table->foreign('nino_id')->references('id')->on('nino');
            $table->unsignedBigInteger('edo_salud_id');
            $table->foreign('edo_salud_id')->references('id')->on('edo_salud');
            $table->unsignedBigInteger('ocupacion_id');
            $table->foreign('ocupacion_id')->references('id')->on('ocupacion');
            
            $table->integer('trabaja');
            $table->integer('licencia_goce_sueldo')->nullable();
            $table->integer('seguro_medico');
            $table->integer('casa_propia');
            $table->integer('asistencia_financiera');

            $table->integer('renta_mensualidad')->nullable();
            $table->integer('dependientes_economicos');
            $table->integer('ingreso_mensual');
            
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
        Schema::dropIfExists('acompanante');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
