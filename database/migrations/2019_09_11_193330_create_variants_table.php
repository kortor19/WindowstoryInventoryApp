<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('variant_code');
            $table->string('color_code');
            $table->string('control_side');
            $table->string('cord_color');
            $table->string('cord_length');
            $table->string('head_rail_color');
            $table->string('bottom_rail_color');
            $table->string('side_by_side');
            $table->string('default_price');
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
        Schema::dropIfExists('variants');
    }
}
