<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
                    ->references('id')->on('students')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('exam_id');
            $table->foreign('exam_id')
                    ->references('id')->on('exams')
                    ->onDelete('cascade');
            $table->integer('degree');
            $table->string('password');
            $table->integer('sent')->default(0);
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
        Schema::dropIfExists('student_exams');
    }
}
