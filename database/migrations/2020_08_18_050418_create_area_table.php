<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->mediumIncrements('id_area_pk');
            $table->char('nombre_area', 50);
            $table->char('rfc_jefe_fk', 13);
            $table->tinyInteger('estatus');
            $table->timestamps();
            

            /* $table->index(["rfc_jefe_fk"], 'rfc_jefe');


            $table->foreign('rfc_jefe_fk', 'rfc_jefe')
                ->references('rfc_jefe_pk')->on('jefe')
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
        Schema::dropIfExists('area');
    }
}
