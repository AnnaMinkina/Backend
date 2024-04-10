<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasPunkttTable extends Migration
{
    public function up()
    {
        Schema::create('nas_punktt', function (Blueprint $table) {
            $table->id('naim_punkta');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nas_punktt');
    }
}
