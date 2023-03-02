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
        Schema::create('shirtsizes', function (Blueprint $table) {
            $table->id('id_shirtsize');
            $table->string('shirtsize_size');
            $table->float('shirtsize_chest');
            $table->float('shirtsize_long');
            $table->float('shirtsize_price');
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
        Schema::dropIfExists('shirtsizes');
    }
};
