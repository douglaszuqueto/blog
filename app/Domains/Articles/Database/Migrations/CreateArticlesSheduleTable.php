<?php

namespace App\Domains\Articles\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateArticlesSheduleTable extends Migration
{

    public function up()
    {
        $this->schema->create('articles_shedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->dateTime('dt_shedule');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('articles_shedule');
    }
}