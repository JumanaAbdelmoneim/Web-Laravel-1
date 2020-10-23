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
            $table->timestamps();
            $table->string('CheckNum')->nullable();
            $table->unsignedBigInteger('CustomerID')->nullable();
            $table->string('PaymentDate');
            $table->decimal('Amount',19 , 0);
            $table->foreign('CustomerID')->references('ID')->on('customers');
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
