<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nombreIndicador');
            $table->string('codigoIndicador');
            $table->string('unidadMedidaIndicador');
            $table->float('valorIndicador');
            $table->date('fechaIndicador');
            $table->time('tiempoIndicador');
            $table->string('origenIndicador');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacions');
    }
}
