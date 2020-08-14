<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTfQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exam_id');
            $table->foreign('exam_id')
                    ->references('id')->on('exams')
                    ->onDelete('cascade');
            $table->string('question');
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
        Schema::dropIfExists('tf_questions');
    }
}
