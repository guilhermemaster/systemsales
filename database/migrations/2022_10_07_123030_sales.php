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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_login');
            $table->unsignedBigInteger('id_products');
            $table->integer('amount');             
            $table->timestamps();
            $table->foreign('id_client')->references('id')->on('client')->onDelete('cascade');
            $table->foreign('id_login')->references('id')->on('login')->onDelete('cascade');
            $table->foreign('id_products')->references('id')->on('products')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
