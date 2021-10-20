<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaive', function (Blueprint $table) {
            $table->id();
            $table->string('maloaive');
            $table->string('tenloaive');
            $table->integer('phihoan');
            $table->integer('phidoive');
            $table->integer('phinangcap');
            $table->integer('huyve');

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
        Schema::dropIfExists('loaive');
    }
}
