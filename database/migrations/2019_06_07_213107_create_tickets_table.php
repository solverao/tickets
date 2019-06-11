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
            $table->string('asunto')->nullable();
            $table->integer('system_id')->unsigned();  // sobre que sistema se levanto el ticket
            $table->integer('type_id')->unsigned(); //  tipo de ticket
            $table->integer('priority_id')->unsigned();
            $table->text('descripcion')->nullable();

            $table->integer('user_id')->unsigned(); //  usuario quien realizo el tikcet
            $table->integer('resolvio_id')->unsigned()->nullable(); //  usuario a quien fue asignado el tikcet
            $table->integer('status_id')->unsigned();
            $table->dateTime('fecha_vencimiento')->nullable();
            $table->dateTime('fecha_termino')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('resolvio_id')->references('id')->on('users');
            $table->foreign('system_id')->references('id')->on('systems');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('priority_id')->references('id')->on('priorities');
        });

        //  Tickets asignados
        Schema::create('ticket_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('ticket_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tickets')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'ticket_id']);
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
