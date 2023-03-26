<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->nullOnDelete()->constrained('payments');
            $table->foreignId('user_id')->nullOnDelete()->constrained('users');
            $table->string('product_name')->nullable();
            $table->text('product_detail')->nullable();
            $table->text('product_image')->nullable();
            $table->string('product_real_amount')->nullable();
            $table->string('product_percentage_discount')->nullable();
            $table->string('product_discounted_amount')->nullable();
            $table->string('purchase_amount')->nullable();
            $table->string('purchase_total_amount')->nullable();
            $table->string("product_sizes")->nullable();
            $table->string("product_colors")->nullable();
            $table->string("quantity")->nullable();
            $table->enum('status', ['Pending', 'Confirmed', 'Cancelled', 'Delivered', 'Refund'])->default('Confirmed');
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
        Schema::dropIfExists('payment_purchases');
    }
}
