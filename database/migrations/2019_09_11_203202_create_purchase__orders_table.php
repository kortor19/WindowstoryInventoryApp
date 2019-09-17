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
            // $table->engine = 'InnoDB';
            $table->string('purchase_id', 32)->index();
            $table->string('quantity');
            $table->string('price_per_unit');
            $table->string('total');
            $table->string('tax');
            $table->string('material_id', 32)->references('material_id')->on('material__orders');
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
