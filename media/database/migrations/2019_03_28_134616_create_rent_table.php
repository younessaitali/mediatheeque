<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->foreign()->references('id')->on('user');
            $table->bigInteger('order_id')->foreign()->references('id')->on('orders');
            $table->bigInteger('order_details_id')->foreign()->references('id')->on('order_details');
            $table->date('order_date');
            $table->date('expiry_date');
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
        Schema::dropIfExists('rent');
    }
}
