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
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('news');
    }
}