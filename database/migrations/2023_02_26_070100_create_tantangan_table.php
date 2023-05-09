<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTantanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tantangan', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement()->length(2);
            $table->integer('materi_id')->unsigned()->nullable()->length(2);
            $table->foreign('materi_id')->references('id')->on('materi'); 
            $table->integer('level')->default(1)->length(2);
            $table->string('nama');            
        });
    }

    public function down()
    {
        Schema::dropIfExists('tantangan');
    }
}
