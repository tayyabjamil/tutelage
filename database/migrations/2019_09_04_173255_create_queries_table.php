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
            $table->integer('id')->autoIncrement();
            $table->integer('profile_id');
            $table->string('title');
            $table->string('type');
            $table->string('toDate');
            $table->string('fromDate');
            $table->string('estimateAmount');
            $table->string('adress');
            $table->string('description');
            
            // $table->primary('id');
            // $table->foreign('profile_id')->references('id')->on('profiles');
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
