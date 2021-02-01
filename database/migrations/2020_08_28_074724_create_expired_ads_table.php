<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpiredAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expired_ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('expired_status');
            $table->date('expired_at');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appartment_ads_id')->nullable();
            $table->unsignedBigInteger('house_ads_id')->nullable();
            $table->unsignedBigInteger('car_ads_id')->nullable();
            $table->unsignedBigInteger('land_ads_id')->nullable();

            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
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
        Schema::dropIfExists('expired_ads');
    }
}
