<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')->nullable();
            $table->string('title');
            $table->text('description');
            $table->json('images');
            $table->double('price', 8, 2);
            $table->double('promo_price', 8, 2)->nullable();
            $table->bigInteger('option_id')->unsigned();
            $table->foreign('option_id')->references('id')->on('options')->nullable();
            $table->integer('stars')->nullable();
            $table->integer('quantity');
            $table->json('tags');
            $table->boolean('disp');
            $table->boolean('mult');
            $table->bigInteger('mult_id')->unsigned()->nullable();
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
        Schema::dropIfExists('products');
    }
}
