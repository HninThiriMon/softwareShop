<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContinuousServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continuous_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('price_per_unit')->nullable();
            $table->string('basic_unit')->nullable();
            $table->integer('tax_percentage')->nullable();
            $table->boolean('active_for_sale')->default(0);
            $table->integer('default_automatic_prolongation_period')->nullable();
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
        Schema::dropIfExists('continuous_services');
    }
}
