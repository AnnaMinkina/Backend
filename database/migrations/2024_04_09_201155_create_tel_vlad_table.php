<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelVladTable extends Migration
{
    public function up()
    {
        Schema::create('tel_vlad', function (Blueprint $table) {
            $table->unsignedBigInteger('tel_id');
            $table->foreign('tel_id')
                ->references('ID_tel')
                ->on('telefon')
                ->onDelete('cascade');
            $table->unsignedBigInteger('vladel_id');
            $table->foreign('vladel_id')
                ->references('ID_p')
                ->on('vladelec')
                ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('tel_vlad');
    }
}
