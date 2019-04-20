<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sub_type_id')->unsigned();
            $table->date('sub_date');
            $table->date('expiry_date');
            $table->bigInteger('payment_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('subs', function ($table) {
            $table->foreign('sub_type_id')->references('id')->on('sub_types');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subs');
    }
}
