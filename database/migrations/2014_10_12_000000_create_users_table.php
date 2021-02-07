<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->index()->nullable();
            $table->string('password')->nullable(true)->index();
            $table->string('email')->unique()->index()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('main_number', 11)->unique()->index();
            $table->string('national_code')->unique()->index()->nullable();

            $table->softDeletes();


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
