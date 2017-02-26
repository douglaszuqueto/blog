<?php

namespace App\Domains\Categories\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateCategoriesTable extends Migration
{

  public function up()
  {
    $this->schema->create('categories', function (Blueprint $table) {
      $table->increments('id');
      $table->string('category');
      $table->boolean('state')->default(1);
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('categories');
  }
}