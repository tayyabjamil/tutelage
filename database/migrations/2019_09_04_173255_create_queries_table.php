<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queries', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('estimateAmount');
            $table->string('courses');
            $table->primary('id');
            $table->foreign('profile_id')->references('id')->on('profiles');
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
        Schema::dropIfExists('_queries');
    }
}
