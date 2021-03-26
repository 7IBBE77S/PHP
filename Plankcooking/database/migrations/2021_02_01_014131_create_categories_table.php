<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('categoryId');
            $table->unsignedInteger('websiteId');
            $table->string('name', 50);
            $table->smallInteger('sortOrder')->nullable();
            $table->string('websitePath', 101)->nullable();
            $table->string('description', 4000)->nullable();
            $table->string('imagePath',500)->nullable();

            $table->foreign('websiteId')->references('websiteId')->on('websites');
            

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
