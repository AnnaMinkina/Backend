<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonTable extends Migration
{
    public function up()
    {
        Schema::create('telefon', function (Blueprint $table) {
            $table->id('ID_tel');
            $table->string('nomer');
            $table->string('tip');
        });
    }
    public function down()
    {
        Schema::dropIfExists('telefon');
    }
}
