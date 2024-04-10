<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVladelecTable extends Migration
{
    public function up()
    {
        Schema::create('vladelec', function (Blueprint $table) {
            $table->id('ID_p');
            $table->string('fio');
            $table->date('date_birthday');
        });
    }
    public function down()
    {
        Schema::dropIfExists('vladelec');
    }
}
