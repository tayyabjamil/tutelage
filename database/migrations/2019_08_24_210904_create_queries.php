<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('Description');
            $table->string('Startdate');
            $table->string('End date');
            $table->string('Estimate Amount');
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
        Schema::dropIfExists('queries');
    }
}
