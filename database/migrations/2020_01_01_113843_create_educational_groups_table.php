<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//گروه آزمایشی داوطلبین پسر, 1400 ,گروه پسر1400
class CreateEducationalGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_groups', function (Blueprint $table) {
            $table->id();

            $table->string('name',30)->nullable();
            $table->string('year',5)->nullable();
            $table->string('group',30)->nullable();
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
        Schema::dropIfExists('educational_groups');
    }
}
