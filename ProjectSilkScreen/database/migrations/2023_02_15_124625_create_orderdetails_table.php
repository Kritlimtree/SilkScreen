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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id('id_orderdetail');
            $table->integer('id_shirtprice');
            $table->integer('id_order');
            $table->integer('id_shirtcolor');
            $table->float('orderdetail_upper');
            $table->float('orderdetail_lower');
            $table->float('orderdetail_left');
            $table->float('orderdetail_right');
            $table->float('orderdetail_wide');
            $table->float('orderdetail_long');
            $table->float('orderdetail_price');
            $table->integer('quantity');
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
        Schema::dropIfExists('orderdetails');
    }
};
