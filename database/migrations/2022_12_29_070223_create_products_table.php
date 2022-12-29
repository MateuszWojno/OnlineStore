<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('cart_item_id');
            $table->unsignedBigInteger('product_inventory_id');
            $table->string('name', 50);
            $table->string('description', 1000);
            $table->integer('price');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('cart_item_id')->references('id')->on('carts_item')->onDelete('cascade');
            $table->foreign('product_inventory_id')->references('id')->on('products_inventory')->onDelete('cascade');
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
};
