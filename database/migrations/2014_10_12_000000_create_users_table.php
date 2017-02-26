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
            $table->string('username',50);
            $table->string('password',150);
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('email',150);
            $table->string('address', 255);
            $table->string('phone_number', 15);
            $table->enum('gender',['1','0']);
            $table->dateTime('bod');
            $table->integer('group_id');
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
