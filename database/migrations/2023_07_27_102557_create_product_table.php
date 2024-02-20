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
            $table->id();
            $table->string('title');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('brand_id');
            $table->bigInteger('color_id')->unsigned();
            $table->bigInteger('size_id')->unsigned();
            $table->integer('price');
            $table->integer('Discounted_Price');
            $table->text('Discription');
            $table->string('image')->nullable()->change();
            $table->timestamps();
            // You can add more fields as needed for the "gallery" feature




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
