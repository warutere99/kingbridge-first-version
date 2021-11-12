<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBnbAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bnb_ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('ads_type');
            $table->string('real_state_type');
            $table->string('condition');
            $table->string('check_in');
            $table->string('check_out');
            $table->integer('price');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->string('parking');
            $table->text('amenities');
            $table->text('description');
            $table->integer('square_meters');
            $table->text('photos');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('county_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('bnb_ads');
    }
}
