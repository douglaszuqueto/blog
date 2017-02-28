<?php

namespace App\Domains\Newsletter\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateNewsletterSubscribersTable extends Migration
{

  public function up()
  {
    $this->schema->create('newsletter_subscribers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('newsletter_subscribers');
  }
}