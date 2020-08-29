<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->mediumIncrements('id_actividad_pk');
            $table->char('nombre_actividad', 50);
            $table->unsignedTinyInteger('numero_dictamen');
            $table->unsignedTinyInteger('creditos');
            $table->unsignedInteger('capacidad_alumnos');
            $table->unsignedMediumInteger('id_periodo_fk');
            $table->char('rfc_responsable_fk', 13)->nullable()->default(null);
            $table->unsignedMediumInteger('id_area_fk');
            $table->tinyInteger('estatus');
            $table->timestamps();
            

            /* $table->index(["id_periodo_fk"], 'id_periodo');

            $table->index(["rfc_responsable_fk"], 'rfc_responsable');

            $table->index(["id_area_fk"], 'id_area');


            $table->foreign('id_periodo_fk', 'id_periodo')
                ->references('id_periodo_pk')->on('periodo')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('rfc_responsable_fk', 'rfc_responsable')
                ->references('rfc_responsable_pk')->on('responsable')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_area_fk', 'id_area')
                ->references('id_area_pk')->on('area')
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
        Schema::dropIfExists('actividad');
    }
}
