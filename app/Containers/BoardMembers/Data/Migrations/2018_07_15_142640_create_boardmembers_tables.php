<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardmembersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boardmembers', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('board_id');
            $table->integer('member_id');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('boardmembers');
    }
}
