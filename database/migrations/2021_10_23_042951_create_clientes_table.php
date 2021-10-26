<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer("codigo");
            $table->string("nombresCliente", "100");
            $table->string("direccionCliente", "100");
            $table->string("emailCliente", "100");
            $table->string("calificacionCliente", "100");
            $table->foreignId("id_servicios")->constrained("servicios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
