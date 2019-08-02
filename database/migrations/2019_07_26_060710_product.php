<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',180)->unique();
            $table->string('slug',180)->unique();
            $table->string('image');
            $table->text('desc');
            $table->float('price');
            $table->float('sale_price');
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
