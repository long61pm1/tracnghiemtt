<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_username');
            $table->string('user_password');
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('user_avatar');
            $table->string('score_1');
            $table->string('score_2');
            $table->string('score_3');
            $table->string('score_4');
            $table->string('score_5');
            $table->string('score_6');
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
        Schema::dropIfExists('tbl_user');
    }
}
