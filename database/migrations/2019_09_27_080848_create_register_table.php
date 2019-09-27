<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fnm');
            $table->string('lnm');
            $table->string('email');
            $table->string('mno');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('pin_code');
            $table->string('state');
            $table->string('country');
            $table->string('uname');
            $table->string('pass');
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
        Schema::dropIfExists('register');
    }
}
