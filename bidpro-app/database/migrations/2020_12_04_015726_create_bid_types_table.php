<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fleet');
            $table->string('seat');
            $table->string('domicile');
            $table->integer('status');
            $table->dateTime('imported');
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
        Schema::dropIfExists('bid_types');
    }
}
