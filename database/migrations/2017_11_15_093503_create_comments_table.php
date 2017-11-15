<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment')->comment('用户评论');
            $table->unsignedInteger('to_user_id')->default(0)->comment('评论谁的评论');
            $table->unsignedInteger('article_id')->comment('文章id');
            $table->unsignedInteger('user_id')->comment('发表评论的用户id');
            $table->unsignedInteger('parent_id')->default(0)->comment('父级评论id');
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
        Schema::dropIfExists('comments');
    }
}
