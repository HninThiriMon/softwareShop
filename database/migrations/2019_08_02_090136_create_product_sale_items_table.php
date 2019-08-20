<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sale_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity_sold');
            $table->integer('price_per_unit');
            $table->integer('price');
            $table->integer('tax_amount');
            $table->integer('sale_id');
            $table->integer('product_id');
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
        Schema::dropIfExists('product_sale_items');
    }
}
