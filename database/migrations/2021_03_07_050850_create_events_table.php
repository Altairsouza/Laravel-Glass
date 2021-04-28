<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("senha");
            $table->string("email");
            $table->string("sexo");
            $table->date("data");
            $table->string("endereco");
            $table->double("numero");
            $table->string("estado");
            $table->string("cidade");
            $table->double("urgencia");
            $table->string("mensagem");
            $table->boolean("checkbox");
            $table->string("cor");
            $table->double("quantidade");
            $table->double("total");
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
        Schema::dropIfExists('events');
    }
}
