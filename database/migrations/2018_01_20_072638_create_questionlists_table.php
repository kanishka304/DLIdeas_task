<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionlists', function (Blueprint $table) {
            $table->increments('id');
            $table->String('subject');
            $table->String('topic');
            $table->String('level');
            $table->String('type');
            $table->String('question');
            $table->String('answer_a');
            $table->String('answer_b');
            $table->String('answer_c');
            $table->String('answer_d');
            $table->String('correct_answer');
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
        Schema::dropIfExists('questionlists');
    }
}
