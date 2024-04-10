<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdTable extends Migration
{
    public function up()
    {
        Schema::create('prod', function (Blueprint $table) {
            $table->id('cod_prodachi');
            $table->integer('N_cheka');
            $table->date('date');
            $table->unsignedBigInteger('tovar');
            $table->foreign('tovar')
                ->references('articul')
                ->on('tovarr')
                ->onDelete('cascade');
            $table->integer('kol-vo');
            $table->unsignedBigInteger('cod_magaz');
            $table->foreign('cod_magaz')
                ->references('cod')
                ->on('magaz')
                ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('prod');
    }
}
