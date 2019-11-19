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
            $table->bigIncrements('id'); 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');  
            $table->string('email')->unique();
            
            $table->string('contact');
            $table->string('password');
            $table->string('adress');
            
            $table->string('university');
            $table->string('department');
            $table->string('semester');
            $table->string('userType');
            
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
