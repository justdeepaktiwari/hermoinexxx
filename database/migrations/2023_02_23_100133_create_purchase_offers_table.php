<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_offers', function (Blueprint $table) {
            $table->id();
            $table->string("subscription_id")->nullable();
            $table->string("name")->nullable();
            $table->string("real_amount")->nullable();
            $table->string("percentage_off")->nullable();
            $table->string("discounted_amount")->nullable();
            $table->string("duration")->nullable();
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
        Schema::dropIfExists('purchase_offers');
    }
}
