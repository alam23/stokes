<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguroPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguro_personals', function (Blueprint $table) {
            $table->increments('id');
            //usuario
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('tipo', 20);
            $table->unsignedInteger('fecha_pago');
            $table->unsignedInteger('monto_pago');

            //seguro familiar
            $table->unsignedInteger('familia_id');
            $table->foreign('familia_id')->references('id')->on('seguro_familiars');
            
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
        Schema::dropIfExists('seguro_personals');
    }
}