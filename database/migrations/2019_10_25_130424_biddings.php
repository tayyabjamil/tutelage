<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Biddings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
         Schema::create('biddings', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->bigInteger('profile_id')->unsigned()->index();
         $table->bigInteger('queries_id')->unsigned()->index();
         $table->string('responce');
         $table->foreign('profile_id')->references('id')->on('profiles');
         $table->foreign('queries_id')->references('id')->on('queries');
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
        //
    }
}
