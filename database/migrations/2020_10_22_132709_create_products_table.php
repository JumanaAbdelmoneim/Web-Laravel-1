<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('Code');
            $table->unsignedBigInteger('ProductlineID')->nullable();
            $table->string('Name', 255);
            $table->integer('Scale');
            $table->string('vendor', 255);
            $table->string('PdtDescription', 255);
            $table->integer('QtyinStock');
            $table->string('BuyPrice', '19,0');
            $table->string('MSRP', 255);
            $table->foreign('ProductlineID')->references('ID')->on('productlines');
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
