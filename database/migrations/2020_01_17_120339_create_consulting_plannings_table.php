<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//تریاژ
class CreateConsultingPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulting_plannings', function (Blueprint $table) {
            $table->id();
            //کاربر
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('start_date')->nullable();
            $table->string('start_time')->nullable();

//
            $table->string('end')->nullable();
            //زمان جلسه
            $table->string('lag_time_session')->nullable();
            //زمان تاخیر
            $table->string('lag_time_delay')->nullable();
            //ورود خروج
            $table->string('entry')->nullable();
            $table->string('exit')->nullable();

            $table->boolean('delay')->default(false)->nullable();
            $table->boolean('contact')->default(false)->nullable();
            $table->string('next_date')->nullable();
            $table->string('next_time')->nullable();




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
        Schema::dropIfExists('consulting_plannings');
    }
}
