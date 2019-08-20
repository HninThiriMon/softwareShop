<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('time_created');
            $table->timestamp('time_paid')->nullable();
            $table->integer('sale_amount')->nullable();
            $table->integer('sale_amount_paid')->nullable();
            $table->integer('tax_amount')->nullable();
            $table->integer('sale_status_id')->nullable();
            $table->integer('user_has_role_id')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
