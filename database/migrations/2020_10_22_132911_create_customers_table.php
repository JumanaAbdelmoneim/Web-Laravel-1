<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('ID');
            $table->integer('salesRepEmployeeNum');
            $table->string('Name', '255');
            $table->string('LastName', '255');
            $table->string('FirstName', '255');
            $table->string('Phone', '255');
            $table->string('Address1', '255');
            $table->string('Address2', '255');
            $table->string('City', '255');
            $table->string('State', '255');
            $table->string('PostalCode', '255');
            $table->integer('Country');
            $table->string('Creditlimit','19,0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
