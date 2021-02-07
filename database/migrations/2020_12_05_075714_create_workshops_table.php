<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('group_id')->index();
            $table->foreign('group_id')->references('id')->on('educational_groups');

            $table->unsignedBigInteger('educational_grade_id')->index();
            $table->foreign('educational_grade_id')->references('id')->on('educational_grades');

            $table->unsignedBigInteger('type_id')->index();
            $table->foreign('type_id')->references('id')->on('workshop_types');

            $table->unsignedBigInteger('service_type')->index();
            $table->foreign('service_type')->references('id')->on('service_categories');

            $table->string('title')->index();

                    //ظرفیت
            $table->bigInteger('capacity');
            $table->string('gender');
            $table->string('date');
            $table->string('time');
            //مدت زمان دوره
            $table->string('duration_time');
            //مجری
            $table->string('host');
            //مکان
            $table->string('place');
            $table->string('address');
            //اقلام
            $table->enum('item', ['0', '1']);
            //تاریخ شروع رزرو
            $table->string('reserved_start');


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
        Schema::dropIfExists('workshops');
    }
}
