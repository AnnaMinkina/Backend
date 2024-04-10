<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNalichTable extends Migration
{
    public function up()
    {
        Schema::create('nalich', function (Blueprint $table) {
            $table->unsignedBigInteger('tovar');
            $table->foreign('tovar')
                ->references('articul')
                ->on('tovarr')
                ->onDelete('cascade');
            $table->unsignedBigInteger('cod_magaz');
            $table->foreign('cod_magaz')
                ->references('cod')
                ->on('magaz')
                ->onDelete('cascade');
            $table->string('nalichie');
        });
    }
    public function down()
    {
        Schema::dropIfExists('nalich');
    }
}
