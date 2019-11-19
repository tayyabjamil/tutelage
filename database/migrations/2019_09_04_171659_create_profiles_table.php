<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('university');
            $table->string('department');
            $table->string('semester');
            $table->string('adress');
            $table->string('userType');
            // $table->primary('id');

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
        Schema::dropIfExists('_profiles');
    }
}
