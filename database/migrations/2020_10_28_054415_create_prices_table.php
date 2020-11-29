<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->string('price');
             
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
             

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
        Schema::dropIfExists('prices');
    }
}
