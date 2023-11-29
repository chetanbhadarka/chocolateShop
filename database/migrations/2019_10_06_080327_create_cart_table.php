<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('username');
          $table->string('product_nm');
          $table->string('product_price');
          $table->string('qty');
          $table->string('product_img');
          $table->string('status')->default=0;
          $table->string('admin_status')->default=0;
        //   $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
