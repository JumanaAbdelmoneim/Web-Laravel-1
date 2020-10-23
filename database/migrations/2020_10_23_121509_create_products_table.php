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
            $table->timestamps();
            $table->integer('Code')->nullable();
            $table->unsignedBigInteger('ProductlineID')->nullable();
            $table->string('Name');
            $table->integer('Scale');
            $table->string('vendor');
            $table->string('PdtDescription');
            $table->integer('QtyinStock');
            $table->decimal('BuyPrice', 19,0);
            $table->string('MSRP');
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
