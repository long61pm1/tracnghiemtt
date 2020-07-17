<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCauHoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cau_hoi', function (Blueprint $table) {
            $table->increments('question_id');
            $table->string('question_number');
            $table->string('question_title');
            $table->string('question_A');
            $table->string('question_B');
            $table->string('question_C');
            $table->string('question_D');
            $table->string('question_true');
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
        Schema::dropIfExists('tbl_cau_hoi');
    }
}
