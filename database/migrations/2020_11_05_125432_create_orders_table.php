<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('discount_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('payment_id')->references('id')->on('payments');

            $table->string('account_number_last_digit',4);
            $table->string('tracking_code',30);
            $table->string('amount',30);
            $table->enum('status',[0,1]);
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
        Schema::dropIfExists('orders');
    }
}
