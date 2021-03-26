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
            $table->increments('productId');
            $table->unsignedInteger('categoryId');
            $table->string('name',100);
            $table->string('description', 4000)->nullable();
            $table->decimal('price',13,2);
            $table->string('priceDescription',50)->nullable();
            $table->smallInteger('sortOrder')->nullable();
            $table->boolean('active');
            $table->decimal('ounces',18,4);
            $table->string('imagePath')->nullable();
            $table->decimal('handlingCost',13,2);
            $table->boolean('taxExempt');
            $table->string('sku',100);
            $table->foreign('categoryId')->references('categoryId')->on('categories');
            
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
