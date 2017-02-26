<?php

namespace App\Domains\News\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateNewsTable extends Migration
{

  public function up()
  {
    $this->schema->create('news', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('url');
      $table->string('image_name');
      $table->string('image_url');
      $table->string('state')->default(1);
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('news');
  }
}