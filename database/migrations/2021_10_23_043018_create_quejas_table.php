<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->id();
            $table->string("autogenerado_queja", 110);
            $table->string("motivo_queja", 60);
            $table->date("fecha_recepcion");
            $table->foreignId("id_clientes")->constrained("clientes");
            $table->foreignId("id_usuarios")->constrained("users");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quejas');
    }
}
