<?php

namespace App\Domains\Articles\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateArticlesTagsTable extends Migration
{

    public function up()
    {
        $this->schema->create('articles_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('articles_tags');
    }
}