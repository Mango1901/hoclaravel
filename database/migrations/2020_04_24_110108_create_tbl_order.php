<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned();
            $table->String('order_total');
            $table->Integer('order_status');
            $table->timestamps();
        });
        Schema::table('order', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customer')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order');
    }
}
