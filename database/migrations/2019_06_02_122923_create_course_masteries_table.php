<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMasteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_masteries', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->integer('mastery_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('mastery_id')->references('id')->on('masteries');
            $table->timestamps();
            $table->unique(['course_id', 'mastery_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_masteries');
    }
}
