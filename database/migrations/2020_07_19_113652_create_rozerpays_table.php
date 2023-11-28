<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRozerpaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rozerpays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('order_id');
            $table->string('transtion_id');
            $table->string('amount');
            $table->string('bank_transaction_id');
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
        Schema::dropIfExists('rozerpays');
    }
}
