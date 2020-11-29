<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('company_name')->nullable();
            $table->string('user_type')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('type_of_scrap')->nullable();
            $table->string('products')->nullable();
            $table->string('monthly_scrap_required')->nullable();
            $table->string('monthly_production')->nullable();
            $table->string('cin_no_or_gst')->nullable();
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('website')->nullable();
            $table->string('type_of_unit')->nullable();
            $table->string('installed_capacity')->nullable();
            $table->string('established_year')->nullable();
            $table->string('designation')->nullable();
            $table->string('monthly_capacity_tons')->nullable();
            $table->string('monthly_scrap_production')->nullable();
            $table->string('is_subcribe')->default(false);
            $table->string('is_approve')->default(false);
            $table->string('is_verified')->default(false);
            $table->string('is_blocked')->default(false);
            $table->string('images')->nullable();
            $table->string('subscription_plan')->default(0);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
