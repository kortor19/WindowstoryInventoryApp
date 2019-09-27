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
        Schema::create('material_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('material_name');
            $table->unsignedBigInteger('material_category_id')->nullable();
            $table->foreign('material_category_id')->references('id')->on('material_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('unit_of_measurement');
            $table->string('reorder_points');
            $table->unsignedBigInteger('variant_id')->nullable();
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE material_orders AUTO_INCREMENT = 10000000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_orders');
    }
}
