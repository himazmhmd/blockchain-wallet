<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('userName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('dateofbirth');
            $table->string('currency');
            $table->string('countrycode');
            $table->string('phoneno');
            $table->string('nicno');
            $table->string('gender');
            $table->string('addressline1');
            $table->string('addressline2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
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
        Schema::dropIfExists('profiles');
    }
}





