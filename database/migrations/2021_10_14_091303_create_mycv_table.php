<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMycvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycv', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('image');
            $table->date('year');
            $table->string('address');
            $table->string('genner');
            $table->string('note');
            $table->string('skill')->nullable();
            $table->string('project')->nullable();
            $table->string('activate');
            $table->string('education');
            $table->string('hoppy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mycv');
    }
}
