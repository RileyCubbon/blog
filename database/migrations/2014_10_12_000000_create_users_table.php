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
            $table->string('name',15)->comment('用户昵称');
            $table->string('email')->unique()->comment('邮箱地址');
            $table->char('password',60)->comment('用户密码');
            $table->string('avatar')->comment('用户头像');
            $table->string('url',60)->nullable()->comment('Github地址');
            $table->string('work',15)->nullable()->comment('工作');
            $table->text('description')->nullable()->comment('描述');
            $table->tinyInteger('is_verify')->default(0)->comment('是否邮箱验证过');
            $table->char('verify_string',48)->nullable()->comment('验证字符串');
            $table->rememberToken();
            $table->timestamp('last_login_time')->nullable()->commnet('最后登陆时间');
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
