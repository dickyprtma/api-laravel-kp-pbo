<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nisn')->unique();
            $table->string('no_hp')->unique();
            $table->string('password');
            $table->text('motto')->nullable();
            $table->integer('exp')->default(0);
            $table->integer('coin')->default(0);
            $table->string('image')->nullable(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
