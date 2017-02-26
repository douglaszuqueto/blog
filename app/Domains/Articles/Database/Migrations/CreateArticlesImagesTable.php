<?php

namespace App\Domains\Articles\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateArticlesImagesTable extends Migration
{

  public function up()
  {
    $this->schema->create('articles_images', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('article_id')->unsigned();
      $table->foreign('article_id')->references('id')->on('articles');
      $table->string('image_name')->nullable();
      $table->string('image_url')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('articles_images');
  }
}