<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('prod_id');
            $table->text('prod_category');
            $table->text('prod_color');
            $table->integer('prod_size');
            $table->integer('prod_price');
            $table->unsignedBigInteger('prod_bnd_id');
            $table->foreign('prod_bnd_id')->references('bnd_id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
