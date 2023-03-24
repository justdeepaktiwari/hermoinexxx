<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->text('product_detail')->nullable();
            $table->text('product_image')->nullable();
            $table->string('product_real_amount')->nullable();
            $table->string('product_percentage_discount')->nullable();
            $table->string('product_discounted_amount')->nullable();
            $table->string("product_sizes")->nullable();
            $table->string("product_colors")->nullable();
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
        Schema::dropIfExists('products');
    }
}