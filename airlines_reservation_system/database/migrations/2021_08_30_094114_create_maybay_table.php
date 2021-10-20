<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaybayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maybay', function (Blueprint $table) {
            $table->string('mamaybay');
            $table->string('hangmaybay');
            $table->integer('firstclass');
            $table->integer('business');
            $table->integer('promo');
            $table->integer('economy');
            $table->integer('tongsoghe');
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
        Schema::dropIfExists('maybay');
    }
}
