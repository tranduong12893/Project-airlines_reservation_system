<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyenbayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyenbay', function (Blueprint $table) {
            $table->increments('id');
            $table->string('machuyenbay');
            $table->string('diemxuatphat');
            $table->string('diemden');
            $table->date('ngaybay');
            $table->date('ngayHC');
            $table->dateTime('di');
            $table->dateTime('hc');
            $table->time('giobay');
            $table->time('giohacanh');
            $table->string('mamaybay');
            $table->integer('giave');

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
        Schema::dropIfExists('chuyenbay');
    }
}
