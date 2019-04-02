<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->string('name_product');
            $table->string('id_type_product');
            $table->date('time_harvest');
            $table->decimal('Price_kg');
            $table->bigInteger('amout');
            $table->string('img_product');
            $table->string('detail_product');
            $table->bigInteger('id_customer')->unsigned();

            $table->timestamps();
            $table->foreign('id_customer')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
