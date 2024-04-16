<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SignUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sign-up', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('identity');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('nationality');
            $table->integer('role');
            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
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
