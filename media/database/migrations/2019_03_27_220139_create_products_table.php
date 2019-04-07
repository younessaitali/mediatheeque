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
            $table->bigInteger('categories_id')->foreign()->references('id')->on('categories')->nullable();
            $table->string('title');
            $table->text('description');
            $table->json('_tags');
            $table->double('price', 8, 2);
            $table->double('promo_price', 8, 2);
            $table->bigInteger('option_id')->foreign()->references('id')->on('option')->nullable();
            $table->integer('stars')->nullable();
            $table->integer('quantity');
            $table->json('type');
            $table->boolean('disp');
            $table->bigInteger('sim_id')->foreign()->references('id')->on('products')->nullable();
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
