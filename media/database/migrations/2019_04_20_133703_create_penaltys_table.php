<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenaltysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penaltys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->integer('penalty')->unsigned();
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
        Schema::dropIfExists('penaltys');
    }
}
