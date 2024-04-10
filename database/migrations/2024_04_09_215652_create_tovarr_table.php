<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTovarrTable extends Migration
{
    public function up()
    {
        Schema::create('tovarr', function (Blueprint $table) {
            $table->id('articul');
            $table->string('naimenovanie');
            $table->string('edinica_izmerenia');
            $table->double('cena');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tovarr');
    }
}
