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
            //$table->engine = 'InnoDB';
            $table->string('material_id', 32)->index();
            $table->string('material_name');
            $table->string('material_category_id', 32)->references('material_category_id')->on('material__categories');
            $table->string('unit_of_measurement');
            $table->string('reorder_point');
            $table->string('variant_id', 32)->references('variant_id')->on('variants');
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
