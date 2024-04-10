<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazTable extends Migration
{
    public function up()
    {
        Schema::create('magaz', function (Blueprint $table) {
            $table->id('cod');
            $table->string('nazvanie');
            $table->unsignedBigInteger('nas_punkt');
            $table->foreign('nas_punkt')
                ->references('naim_punkta')
                ->on('nas_punktt')
                ->onDelete('cascade');
            $table->string('adres');
            $table->string('telefon');
            $table->string('director');
        });
    }

    public function down()
    {
        Schema::dropIfExists('magaz');
    }
}
