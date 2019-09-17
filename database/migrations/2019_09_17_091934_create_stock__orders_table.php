<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock__orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('distributor_id');
            $table->foreign('distributor_id')->references('id')->on('distributors')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('variant_id');
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade')->onUpdate('cascade');
            $table->string('item_name');
            $table->string('width');
            $table->string('height');
            $table->string('sqm');
            $table->string('quantity');
            $table->string('location');
            $table->string('out_in');
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
        Schema::dropIfExists('stock__orders');
    }
}
