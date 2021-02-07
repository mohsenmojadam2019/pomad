<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEducationalInfosTable extends Migration
{


    public function up()
    {
        Schema::create('user_educational_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('educational_field_id');
            $table->foreign('educational_field_id')->references('id')->on('educational_fields');



            $table->unsignedBigInteger('educational_grade_id');

            $table->foreign('educational_grade_id')->references('id')->on('educational_grades');




            $table->unsignedBigInteger('diploma_field_id');

            $table->foreign('diploma_field_id')->references('id')->on('diploma_fields');




            $table->float('average_Written_diplom',5)->nullable();

            $table->string('end_education',5)->nullable();
            $table->string('academic_year',5)->nullable();
//بعدا تصمیم میگیریم
//            $table->enum('status',[0,1]);

            $table->string('get_license_year',5)->nullable();
//تحت پوشش هست
            $table->boolean('is_special')->nullable();

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
        Schema::dropIfExists('user_educational_infos');
    }
}
