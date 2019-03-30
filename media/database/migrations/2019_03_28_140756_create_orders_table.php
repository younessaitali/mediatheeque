<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->foreign()->references('id')->on('user');
            $table->bigInteger('payment_id')->foreign()->references('id')->on('payment');
            $table->date('order_date');
            $table->dateTime('s_date');
            $table->bigInteger('shipper_id')->foreign()->references('id')->on('shipper');
            $table->dateTime('payment_date');
            $table->integer('status');
            $table->integer('discount');
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
