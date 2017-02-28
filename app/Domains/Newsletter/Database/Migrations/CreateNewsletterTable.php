<?php

namespace App\Domains\Newsletter\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateNewsletterTable extends Migration
{

  public function up()
  {
    $this->schema->create('newsletter', function (Blueprint $table) {
      $table->increments('id');
      $table->string('campaign');
      $table->smallInteger('state')->default(0);
      $table->smallInteger('send')->default(0);
      $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('newsletter');
  }
}