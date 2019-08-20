<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOneTimeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_time_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('price')->nullable();
            $table->integer('tax_percentage')->nullable();
            $table->boolean('active_for_sale')->default(0);
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
        Schema::dropIfExists('one_time_services');
    }
}
