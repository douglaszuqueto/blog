<?php

namespace App\Domains\Contact\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateContactTable extends Migration
{

  public function up()
  {
    $this->schema->create('contacts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->string('subject');
      $table->text('message');
      $table->tinyInteger('state')->default(0);
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('contacts');
  }
}