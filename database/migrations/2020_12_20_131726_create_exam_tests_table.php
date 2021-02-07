<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //آزمون آزمایشی
    public function up()
    {
        Schema::create('exam_tests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
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
        Schema::dropIfExists('exam_tests');
    }
}
