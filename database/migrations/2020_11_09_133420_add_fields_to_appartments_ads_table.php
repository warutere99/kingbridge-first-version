<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAppartmentsAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appartment_ads', function (Blueprint $table) {
            $table->string('ad_status')->nullable();
            $table->boolean('ad_featured')->nullable();
            $table->integer('duration')->nullable();
            $table->string('parking')->nullable();
            $table->text('address')->nullable();
            $table->string('period')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appartment_ads', function (Blueprint $table) {
            //
        });
    }
}
