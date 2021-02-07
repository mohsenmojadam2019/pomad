<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workshops', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

           $table->unsignedBigInteger('workshop_id');
           $table->foreign('workshop_id')->references('id')->on('workshops');

           $table->enum('is_present',['0','1'])->default('0');
           $table->enum('has_reserved',['0','1'])->default('0');
           $table->string('online_time')->nullable();
           $table->json('guest_info')->nullable();
           $table->text('comment')->nullable();




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
        Schema::dropIfExists('user_workshops');
    }
}
