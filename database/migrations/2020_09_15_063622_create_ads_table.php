<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('quantity');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            

            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')
              ->references('id')->on('states')
              ->onDelete('cascade');
            
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->string('address');
            $table->string('is_approve')->default(0);
            $table->string('payment_term');
            $table->string('shipment_term');
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
        Schema::dropIfExists('ads');
    }
}
