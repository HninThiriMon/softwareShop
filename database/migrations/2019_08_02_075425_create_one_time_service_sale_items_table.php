<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOneTimeServiceSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_time_service_sale_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('price');
            $table->integer('tax_amount')->nullable();
            $table->integer('sale_id');
            $table->integer('service_id')->nullable();
            $table->integer('salesperson_role_id')->nullable();
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
        Schema::dropIfExists('one_time_service_sale_items');
    }
}
