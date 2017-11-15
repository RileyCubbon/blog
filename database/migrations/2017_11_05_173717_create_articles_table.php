<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',40)->comment('文章标题');
            $table->tinyInteger('admin_id')->commnet('作者id');
            $table->tinyInteger('is_show')->default(1)->comment('是否显示文章');
            $table->tinyInteger('is_hot')->default(0)->comment('是否为热门文章');
            $table->tinyInteger('recommend')->default(0)->commnet('是否推荐文章');
            $table->string('description')->commnet('文章描述');
            $table->text('content')->comment('文章内容');
            $table->unsignedSmallInteger('click_amount')->default(0)->commnet('文章点击量');
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
        Schema::dropIfExists('articles');
    }
}
