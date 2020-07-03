<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcqQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exam_id');
            $table->foreign('exam_id')
                    ->references('id')->on('exams')
                    ->onDelete('cascade');
            $table->string('question');
            $table->string('first_choice');
            $table->string('second_choice');
            $table->string('third_choice');
            $table->string('forth_choice');
            $table->string('correct_answer');
            $table->string('graph')->nullable();
            $table->integer('difficulty')->nullable();
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
        Schema::dropIfExists('mcq_questions');
    }
}
