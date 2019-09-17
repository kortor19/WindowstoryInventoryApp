<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->engine = 'InnoDB';
            $table->string('product_id', 32)->index();
            $table->string('product_name');
            $table->string('unit');
            $table->string('product_category_id', 32)->references('product_category_id')->on('product__categories');
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
        Schema::dropIfExists('product__orders');
    }
}
