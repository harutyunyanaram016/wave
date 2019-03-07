<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
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
            $table->string('name');
            $table->string('mail');
            $table->integer('phone');
            $table->string('company_name');
            $table->string('business');
            $table->string('design');
            $table->string('type:');
            $table->string('functions');
            $table->string('side_services');
            $table->string('lang');
            $table->string('other');
            $table->string('sections');
            $table->string('navigation');
            $table->string('information_blocks');
            $table->string('desires');
            $table->string('content');
            $table->string('additional_services:');

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
}
