<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedMediumInteger('id_inscripcion_fk')->unsigned();
            $table->float('criterio1');
            $table->float('criterio2');
            $table->float('criterio3');
            $table->float('criterio4');
            $table->float('criterio5');
            $table->float('criterio6');
            $table->float('criterio7');
            $table->string('observaciones')->nullable()->default(null);
            $table->float('valor_numerico')->nullable()->default(null);
            $table->timestamps();

            /* $table->index(["id_inscripcion_fk"], 'id_inscripcion');


            $table->foreign('id_inscripcion_fk', 'id_inscripcion')
                ->references('id_inscripcion_pk')->on('inscripcion')
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
        Schema::dropIfExists('evaluacion');
    }
}
