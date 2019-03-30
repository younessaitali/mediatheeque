<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipper', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('phone', 20);
            $table->char('C_name', 25);
            $table->char('adresse', 150);
            $table->char('id_id', 100);
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
        Schema::dropIfExists('shipper');
    }
}
