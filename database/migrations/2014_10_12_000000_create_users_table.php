<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('degree');
            $table->string('batch');
            $table->string('passing_year');
            $table->string('current_job')->nullable();
            $table->string('designation')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('gplus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('image');
            $table->string('password');
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
        Schema::drop('users');
    }
}
