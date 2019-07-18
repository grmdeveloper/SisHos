<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadeEspecializacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_especializacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidade_id')->unsigned();
            $table->integer('especializacao_id')->unsigned();
            $table->string('descricao');
            $table->boolean('status') ->default(false);
            
            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('especializacao_id')->references('id')->on('especializacoes')->onDelete('cascade');
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
        Schema::dropIfExists('unidade_especializacoes');
    }
}
