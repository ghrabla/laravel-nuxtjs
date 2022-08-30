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
            $table->increments('id');
            $table->string('fullname');
            $table->string('adresse');
            $table->string('city');
            $table->string('postale');
            $table->string('phone');
            $table->string('email');
            $table->decimal('orderquant', 5, 2);
            $table->integer('product_id')->references('id')->on('products');
            $table->timestamps();
            // $table->unsignedBigInteger('product_id');
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
