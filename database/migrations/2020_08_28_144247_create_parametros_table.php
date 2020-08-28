<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id;
            $table->foreignId('filial_fil_id');
            $table->string('prm_nome');
            $table->integer('prm_modulo');
            $table->integer('prm_targetSuperior');
            $table->integer('prm_targetInferior');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
