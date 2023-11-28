<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('father')->nullable();
            $table->string('caste')->nullable();
            $table->string('colony')->nullable();
            $table->string('area')->nullable();
            $table->string('tehsil')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('pinCode')->nullable();
            $table->string('proffession')->nullable();
            $table->string('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('aadhaarNO')->nullable();
            $table->string('education')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            $table->string('annualIncome')->nullable();
            $table->string('nomineeAge')->nullable();
            $table->string('nomineeName')->nullable();
            $table->string('dropRelation')->nullable();
            $table->string('gender')->nullable();
            $table->string('amount')->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
