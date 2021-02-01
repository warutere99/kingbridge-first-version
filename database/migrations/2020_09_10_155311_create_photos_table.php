<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('images');
            $table->unsignedBigInteger('appartment_ads_id')->nullable();
            $table->unsignedBigInteger('house_ads_id')->nullable();
            $table->unsignedBigInteger('car_ads_id')->nullable();
            $table->unsignedBigInteger('land_ads_id')->nullable();

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
        Schema::dropIfExists('photos');
    }
}
