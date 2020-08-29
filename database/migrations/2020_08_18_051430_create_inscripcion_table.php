<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->mediumIncrements('id_inscripcion_pk');
            $table->integer('num_control');
            $table->unsignedMediumInteger('id_periodo_fk');
            $table->unsignedMediumInteger('id_actividad_fk');
            $table->date('fecha_inscripcion');
            $table->tinyInteger('estatus');
            $table->timestamps();

           /*  $table->index(["id_periodo_fk"], 'periodo');

            $table->index(["id_actividad_fk"], 'id_actividad');


            $table->foreign('id_periodo_fk', 'periodo')
                ->references('id_periodo_pk')->on('periodo')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_actividad_fk', 'id_actividad')
                ->references('id_actividad_pk')->on('actividad')
                ->onDelete('restrict')
                ->onUpdate('restrict'); */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
}
