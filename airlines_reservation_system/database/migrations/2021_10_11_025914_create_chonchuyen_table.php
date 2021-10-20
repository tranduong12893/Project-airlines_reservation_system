<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChonchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chonchuyen', function (Blueprint $table) {
            $table->id();
            $table->string('machuyenbay');
            $table->string('diemxuatphat');
            $table->string('diemden');
            $table->date('ngaybay');
            $table->date('ngayHC');
            $table->time('giobay');
            $table->time('giohacanh');
            $table->string('hangmaybay');
            //$table->string('soluong');
            $table->integer('gia');
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
        Schema::dropIfExists('chonchuyen');
    }
}
