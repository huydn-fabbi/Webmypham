<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id')->unsigned()->nullable();
            // $table->foreign('category_id')
            //     ->references('product_id')
            //     ->on('categories')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->integer('brand_id')->unsigned()->nullable();
            // $table->foreign('brand_id')
            //     ->references('product_id')
            //     ->on('brands')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->integer('promotion_id')->unsigned()->nullable();    
            // $table->foreign('promotion_id')
            //     ->references('product_id')
            //     ->on('promotions')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->string('product_name');
            $table->string('description');
            $table->string('content');
            $table->double('price');
            $table->integer('product_type');
            $table->double('product_amount');
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
}
