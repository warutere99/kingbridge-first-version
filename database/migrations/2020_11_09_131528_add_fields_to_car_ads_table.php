<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCarAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('car_ads', function (Blueprint $table) {
            $table->string('ad_status')->nullable();
            $table->boolean('ad_featured')->nullable();
            $table->integer('duration')->nullable();
            $table->string('body_type');
            $table->string('color')->nullable();
            $table->string('duty_type');
            $table->string('interior_type')->nullable();
            $table->integer('engine_size');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_ads', function (Blueprint $table) {
           
        });
    }
}
