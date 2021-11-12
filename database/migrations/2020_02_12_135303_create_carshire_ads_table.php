<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarshireAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carshire_ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('ads_type');
            $table->string('make');
            $table->string('model');
            $table->string('booking_date');
            $table->string('returning_date');
            $table->string('year_of_build');
            $table->string('engine_size');
            $table->string('body_type');
            $table->string('condition');
            $table->integer('mileage');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->string('exchange');
            $table->integer('price');
            $table->integer('compare_price');
            $table->text('description');
            $table->text('photos');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('county_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->foreign('county_id')->references('id')->on('counties')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('carshire_ads');
    }
}
