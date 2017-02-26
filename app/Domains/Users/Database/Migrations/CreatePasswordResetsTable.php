<?php

namespace App\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreatePasswordResetsTable extends Migration
{

  public function up()
  {
    $this->schema->create('password_resets', function (Blueprint $table) {
      $table->string('email')->index();
      $table->string('token')->index();
      $table->timestamp('created_at')->nullable();
    });
  }

  public function down()
  {
    $this->schema->drop('password_resets');
  }
}