<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('featured_status');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appartment_ads_id')->nullable();
            $table->unsignedBigInteger('house_ads_id')->nullable();
            $table->unsignedBigInteger('car_ads_id')->nullable();
            $table->unsignedBigInteger('land_ads_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('appartment_ads_id')->references('id')->on('appartment_ads')->onDelete('cascade');
            $table->foreign('house_ads_id')->references('id')->on('house_ads')->onDelete('cascade');
            $table->foreign('car_ads_id')->references('id')->on('car_ads')->onDelete('cascade');
            $table->foreign('land_ads_id')->references('id')->on('land_ads')->onDelete('cascade');

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
        Schema::dropIfExists('featured_ads');
    }
}
