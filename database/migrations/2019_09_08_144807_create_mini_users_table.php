<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiniUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('openid')->nullable()->unique();
            $table->string('session_key')->nullable();

            $table->string('nickName')->nullable()->comment('昵称');
            $table->string('avatarUrl')->nullable()->comment('头像');
            $table->string('language')->nullable()->comment('语言');
            $table->unsignedTinyInteger('gender')->nullable()->comment('性别');
            $table->string('country')->nullable()->comment('国家');
            $table->string('province')->nullable()->comment('省份');
            $table->string('city')->nullable()->comment('城市');

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
        Schema::dropIfExists('mini_users');
    }
}
