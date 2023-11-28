<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmisions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            $table->date('dob')->nullable();
            $table->string('area')->nullable();
            $table->string('dist')->nullable();
            $table->string('state')->nullable();
            $table->string('high_subject')->nullable();
            $table->string('high_school_name')->nullable();
            $table->string('high_year')->nullable();
            $table->string('high_per')->nullable();
            $table->string('inter_subject')->nullable();
            $table->string('inter_school_name')->nullable();
            $table->string('inter_year')->nullable();
            $table->string('inter_per')->nullable();
            $table->string('garduation_subject')->nullable();
            $table->string('garduation_collage_name')->nullable();
            $table->string('garduation_year')->nullable();
            $table->string('garduation_per')->nullable();
            $table->string('post_subject')->nullable();
            $table->string('post_collage_name')->nullable();
            $table->string('post_year')->nullable();
            $table->string('post_per')->nullable();
            $table->string('other_subject')->nullable();
            $table->string('other_collage_name')->nullable();
            $table->string('other_year')->nullable();
            $table->string('other_per')->nullable();
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
        Schema::dropIfExists('addmisions');
    }
}
