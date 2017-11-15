<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message')->comment('用户留言');
            $table->unsignedInteger('to_user_id')->default(0)->comment('评论谁的留言');
            $table->unsignedInteger('user_id')->comment('发表留言的用户id');
            $table->unsignedInteger('parent_id')->default(0)->comment('父级留言id');
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
        Schema::dropIfExists('boards');
    }
}
