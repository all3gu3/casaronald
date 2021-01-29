<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nino', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('qr');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento');
            $table->string('edad');
            $table->string('sexo');
            $table->string('calle');
            $table->integer('numero');        
            $table->string('localidad');
            $table->string('cp');
            $table->string('primer_telefono');
            $table->string('segundo_telefono');
            $table->string('dialecto');
            
            $table->string('diagnostico')->nullable();
            $table->string('medico')->nullable();
            $table->string('alerg_alimentos')->nullable();
            $table->string('alerg_medicamentos')->nullable();
            $table->string('colonia')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('servicio')->nullable();
            $table->string('estatus_estancia')->nullable();
            $table->string('municipio')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->date('fecha_salida')->nullable();
            
            $table->unsignedBigInteger('trabajador_social_id');
            $table->foreign('trabajador_social_id')->references('id')->on('trabajador_social');
            $table->unsignedBigInteger('tipo_dieta_id');
            $table->foreign('tipo_dieta_id')->references('id')->on('tipo_dieta');
            $table->unsignedBigInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on('hospital');
            
            $table->unsignedBigInteger('escolaridad_id');
            $table->foreign('escolaridad_id')->references('id')->on('escolaridad');
            $table->unsignedBigInteger('clasificacion_social_id');
            $table->foreign('clasificacion_social_id')->references('id')->on('clasificacion_social');
            $table->unsignedBigInteger('zona_id');
            $table->foreign('zona_id')->references('id')->on('zona');
            $table->unsignedBigInteger('salario_minimo_id');
            $table->foreign('salario_minimo_id')->references('id')->on('salario_minimo');
            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipio');
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
        Schema::dropIfExists('nino');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
