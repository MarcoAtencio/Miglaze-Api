<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('kind_product_id');
            $table->foreign('kind_product_id')->references('id')->on('kind_products');

            $table->unsignedBigInteger('product_brand_id');
            $table->foreign('product_brand_id')->references('id')->on('product_brands');

            $table->string('name');
            $table->string('unit_price');
            $table->string('image');
            $table->string('stock');

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
