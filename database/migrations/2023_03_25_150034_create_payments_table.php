<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullOnDelete()->constrained('users');
            $table->text('payment_id');
            $table->text('amount');
            $table->longText('billing_details');
            $table->text('balance_transaction');
            $table->text('payment_method');
            $table->text('fingerprint');
            $table->text('last4');
            $table->text('cvc_check');
            $table->longText('receipt_url');
            $table->longText('payment_method_details');
            $table->text('status');
            $table->text('type');
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
        Schema::dropIfExists('payments');
    }
}
