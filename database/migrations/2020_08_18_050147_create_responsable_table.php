<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('rfc_responsable_pk');
            $table->char('nombre_responsable', 30);
            $table->char('apaterno_responsable', 30);
            $table->char('amaterno_responsable', 30)->nullable()->default(null);
            $table->integer('telefono_responsable')->nullable()->default(null);
            $table->string('correo_responsable', 100)->nullable()->default(null);
            $table->date('fecha_de_registro');
            $table->tinyInteger('estatus');
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
        Schema::dropIfExists('responsable');
    }
}
