<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Product_id')->foreign()->references('id')->on('product');
            $table->bigInteger('order_id')->foreign()->references('id')->on('orders');
            $table->double('price', 8, 2);
            $table->integer('quantity');
            $table->string('type');
            $table->bigInteger('option_id')->foreign()->references('id')->on('option');
            $table->bigInteger('shipper_id')->foreign()->references('id')->on('shipper');
            $table->integer('status');
            $table->dateTime('s_date');

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
        Schema::dropIfExists('order_details');
    }
}
