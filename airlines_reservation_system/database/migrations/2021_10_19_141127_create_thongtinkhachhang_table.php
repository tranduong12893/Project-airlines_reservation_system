<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongtinkhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinkhachhang', function (Blueprint $table) {
            $table->increments('maKH');
            $table->string('name');
            $table->string('email');
            $table->dateTime('DOB');
            $table->integer('phone');
            $table->string('address');
            $table->string('gender');
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
        Schema::dropIfExists('thongtinkhachhang');
    }
}
