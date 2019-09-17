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
            $table->string('stock_id', 32)->index();
            $table->string('distributor_id', 32)->references('distributor_id')->on('distributors');
            // $table->string('customer_id', 32);
            $table->string('customer_id', 32)->references('customer_id')->on('customers');
            // $table->string('variant_id', 32);
            $table->string('variant_id', 32)->references('variant_id')->on('variants');
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
