<?php

use Illuminate\Support\Facades\Schema;
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
            $table->integer('department_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('paternal_last_name')->nullable();
            $table->string('name_user')->nullable();
            $table->string('image')->nullable();
            $table->string('cinit')->unique()->nullable();
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->char('genre',1)->nullable();
            $table->boolean('verified')->default(false);
            $table->string('password');
            $table->foreign('department_id')->references('id')->on('departments');
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
        Schema::dropIfExists('users');
    }
}
