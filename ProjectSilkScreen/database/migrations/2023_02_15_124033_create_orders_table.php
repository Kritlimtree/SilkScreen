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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->integer('id_user');
            $table->integer('id_status');
            $table->integer('id_post');
            $table->string('order_id');
            $table->integer('order_type');
            $table->float('order_price');
            $table->string('postcode');
            $table->date('order_orderdate');
            $table->date('order_deliverydate');
            $table->string('picture');
            $table->integer('id_color');
            $table->integer('blockprice');
            $table->integer('id_sample');
            $table->integer('numshirtcolor');
            $table->integer('delivery_price');
            $table->integer('status_payment');
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
        Schema::dropIfExists('orders');
    }
};
