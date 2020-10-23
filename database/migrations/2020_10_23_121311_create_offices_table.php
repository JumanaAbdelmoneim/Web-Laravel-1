<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('Code')->nullable();
            $table->string('City');
            $table->string('Phone');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('State');
            $table->string('Country');
            $table->integer('PostalCode');
            $table->string('Territory','200');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
