<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

class CreateOrderCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_carts', function (Blueprint $table) {
            $table->increments('orderCartId');
            $table->unsignedInteger('websiteId');

            $table->string('uniqueIdentifier');
            $table->string('notes',1000)->nullable();
            $table->string('history',1000)->nullable();
            $table->integer('status');
            $table->string('shippingFirstName',100)->nullable();
            $table->string('shippingLastName',100)->nullable();
            $table->string('shippingAddress1',250)->nullable();
            $table->string('shippingAddress2',250)->nullable();
            $table->string('shippingCity',100)->nullable();
            $table->string('shippingState',10)->nullable();
            $table->string('shippingPostalCode',20)->nullable();
            $table->string('shippingPhone',20)->nullable();
            $table->string('shippingEmail',250)->nullable();
            $table->string('shippingCountry',2)->nullable();

            $table->boolean('shippingValidation')->nullable();
            $table->decimal('shippingCost',13,2)->nullable();
            $table->smallInteger('shippingType')->nullable();

            $table->string('billingFirstName',100)->nullable();
            $table->string('billingLastName',100)->nullable();
           
            $table->string('billingAddress1',250)->nullable();
            $table->string('billingAddress2',250)->nullable();
            $table->string('billingCity',100)->nullable();
            $table->string('billingState',10)->nullable();
            $table->string('billingPostalCode',20)->nullable();
            $table->string('billingPhone',20)->nullable();
            $table->string('billingEmail',250)->nullable();
            $table->string('billingCountry',2)->nullable();

            $table->dateTime('dateCreated')->nullable();
            $table->dateTime('purchaseDate')->nullable();

            $table->decimal('taxes',13,2)->nullable();
            $table->decimal('orderTotal',13,2)->nullable();

            $table->string('authorizationCode',100)->nullable();
            $table->string('transactionID',100)->nullable();
            $table->string('creditCardType',100)->nullable();

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
        Schema::dropIfExists('order_carts');
    }
}
