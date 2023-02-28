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
        Schema::create('usershops', function (Blueprint $table) {
            $table->id('id_user');
            $table->integer('id_tumbon');
            $table->string('user_name');
            $table->string('user_fname');
            $table->string('user_phone');
            $table->string('user_username');
            $table->string('user_password');
            $table->text('user_address');
            $table->integer('is_admin');
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
        Schema::dropIfExists('usershops');
    }
};
