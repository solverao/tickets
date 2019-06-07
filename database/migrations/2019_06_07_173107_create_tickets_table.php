<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //  usuario quien realizo el tikcet
            $table->integer('termino_id')->unsigned(); //  usuario a quien fue asignado el tikcet
            $table->integer('sistema_id')->unsigned();  // sobre que sistema se levanto el ticket
            $table->integer('type_id')->unsigned();; //  tipo de ticket
            $table->integer('status_id')->unsigned();;
            $table->integer('priority_id')->unsigned();;
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha_vencimiento')->nullable();
            $table->dateTime('fecha_termino')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('resolvio_id')->references('id')->on('users');
            $table->foreign('sistema_id')->references('id')->on('systems');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('priority_id')->references('id')->on('priorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
