<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement()->length(2);

            $table->integer('tantangan_id')->unsigned()->nullable()->length(2);
            $table->foreign('tantangan_id')->references('id')->on('tantangan'); 

            $table->string('soal');
            $table->string('image')->nullable();
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->tinyInteger('jawaban')->length(1);
            $table->text('pembahasan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal');
    }
}
