<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJefeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('rfc_jefe_pk');
            $table->char('nombre_jefe', 30);
            $table->char('apaterno_jefe', 30);
            $table->char('amaterno_jefe', 30)->nullable()->default(null);
            $table->integer('telefono_jefe');
            $table->string('correo_jefe', 100);
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
        Schema::dropIfExists('jefe');
    }
}
