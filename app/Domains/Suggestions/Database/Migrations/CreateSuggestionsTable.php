<?php

namespace App\Domains\Suggestions\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateSuggestionsTable extends Migration
{

  public function up()
  {
    $this->schema->create('suggestions', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->text('description');
      $table->string('name');
      $table->string('email')->nullable();
      $table->tinyInteger('votes')->default(0);
      $table->tinyInteger('state')->default(0);
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('suggestions');
  }
}