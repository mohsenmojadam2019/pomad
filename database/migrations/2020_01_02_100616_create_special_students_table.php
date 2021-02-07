<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_students', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('mentor_id')->nullable();
            $table->foreign('mentor_id')->references('id')->on('users');



            $table->unsignedBigInteger('educational_group_id');
            $table->foreign('educational_group_id')->references('id')->on('educational_groups');

            $table->string('student_code',30);
            $table->longText('description')->nullable();
//انصرافی
            $table->boolean('is_cancel')->default(false);

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
        Schema::dropIfExists('special_students');
    }
}
