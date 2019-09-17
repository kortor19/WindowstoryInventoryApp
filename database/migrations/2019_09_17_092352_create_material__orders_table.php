<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material__orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('material_name');
            $table->unsignedBigInteger('material_category_id');
            $table->foreign('material_category_id')->references('id')->on('material__categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('unit_of_measurement');
            $table->string('reorder_point');
            $table->unsignedBigInteger('variant_id');
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('material__orders');
    }
}
