<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('boards');
    }
}
