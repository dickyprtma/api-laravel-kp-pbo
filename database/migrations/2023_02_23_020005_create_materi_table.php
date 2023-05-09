<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriTable extends Migration
{
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement()->length(2);
            $table->integer('level')->default(1)->length(2);
            $table->string('nama');
            $table->string('image');
            $table->string('image_tantangan');
            $table->text('konten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materi');
    }
}
