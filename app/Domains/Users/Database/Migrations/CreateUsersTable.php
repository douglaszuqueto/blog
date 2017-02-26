<?php

namespace App\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateUsersTable extends Migration
{

  public function up()
  {
    $this->schema->create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->tinyInteger('state')->default(1);
      $table->rememberToken();
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('users');
  }
}