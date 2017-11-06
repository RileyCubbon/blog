<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesAndCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_and_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id')->comment('文章id');
            $table->unsignedInteger('category_id')->comment('分类id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_and_categories');
    }
}
