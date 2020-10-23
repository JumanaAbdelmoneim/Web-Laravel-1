<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__products', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('ID')->nullable();
            $table->unsignedBigInteger('OrderID')->nullable();
            $table->integer('ProductCode')->nullable();
            $table->integer('Qty');
            $table->decimal('PriceEach', 19,0);
            $table->foreign('OrderID')->references('ID')->on('orders');
            $table->foreign('ProductCode')->references('Code')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__products');
    }
}
