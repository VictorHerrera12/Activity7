<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('course_key');
        $table->string('title');
        $table->string('cover')->nullable();
        $table->text('content')->nullable();
        $table->text('material')->nullable();
        $table->string('robotics_kit');
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
        Schema::dropIfExists('courses');
    }
}
