<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
//تعیین وقت جلسه دوم
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
//            $table->string('mentor_name');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
//گروه
            $table->unsignedBigInteger('educational_group_id');
            $table->foreign('educational_group_id')->references('id')->on('educational_groups');

            $table->string('start_date_job')->nullable();
//قبلا همکاری داشته ؟
            $table->enum('collaborated_before',['yes','no'])->nullable();
  //امتیاز
            $table->string('score')->nullable();


            $table->softDeletes();


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
        Schema::dropIfExists('mentors');
    }
}
