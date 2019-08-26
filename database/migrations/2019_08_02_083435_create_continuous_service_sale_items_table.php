<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContinuousServiceSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continuous_service_sale_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity_sold')->nullable();
            $table->integer('price_per_unit');
            $table->integer('price'); 
            $table->integer('tax_amount')->nullable();
            $table->integer('sale_id');
            $table->integer('service_id');
            $table->integer('salesperson_role_id')->nullable();
            $table->timestamp('start_time');
            $table->timestamp('end_time')->nullable();
            $table->boolean('automatic_prolongation')->default(0);
            $table->integer('automatic_prolongation_period')->nullable();
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
        Schema::dropIfExists('continuous_service_sale_items');
    }
}
