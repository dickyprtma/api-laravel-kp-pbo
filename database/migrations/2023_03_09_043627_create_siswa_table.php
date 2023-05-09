<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->string('nama_lengkap');
            $table->string('nisn')->unique();
            $table->string('alamat')->nullable();
            $table->string('ttl')->nullable();
            $table->string('no_hp',20)->unique();
            $table->string('password');
            $table->text('motto')->nullable();
            $table->integer('exp')->default(0);
            $table->integer('level_materi')->default(1)->length(2);
            $table->integer('level_tantangan')->default(1)->length(2);
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
