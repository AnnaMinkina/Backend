<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresTable extends Migration
{
    public function up()
    {
        Schema::create('adres', function (Blueprint $table) {
            $table->id('ID_a');
            $table->string('strana');
            $table->string('gorod');
            $table->string('ylisa');
            $table->string('dom');
            $table->string('corpus');
            $table->integer('kvartira');
        });
    }
    public function down()
    {
        Schema::dropIfExists('adres');
    }
}
