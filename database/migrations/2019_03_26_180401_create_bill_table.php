<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_customers')->unsigned();
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_customers')->references('id')->on('customers');
            $table->foreign('id_product')->references('id_product')->on('product');
            $table->decimal('price_transport');
            $table->decimal('price_product');
            $table->decimal('price');
            $table->string('type');

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
        Schema::dropIfExists('bill');
    }
}
