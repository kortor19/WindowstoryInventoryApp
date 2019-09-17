<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase__orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantity');
            $table->string('price_per_unit');
            $table->string('total');
            $table->string('tax');
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('material__orders')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('purchase__orders');
    }
}
