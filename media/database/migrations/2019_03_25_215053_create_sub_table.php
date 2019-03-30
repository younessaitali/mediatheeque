<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sub_type_id')->foreign()->references('id')->on('sub_type');
            $table->date('sub_date');
            $table->date('expiry_date');
            $table->bigInteger('payment_id')->foreign()->references('id')->on('payment');
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
        Schema::dropIfExists('sub');
    }
}
