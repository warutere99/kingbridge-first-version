<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToLandAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('land_ads', function (Blueprint $table) {
            $table->string('ad_status')->nullable();
            $table->boolean('ad_featured')->nullable();
            $table->integer('duration')->nullable();
            $table->text('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('land_ads', function (Blueprint $table) {
            //
        });
    }
}
