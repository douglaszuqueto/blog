<?php

namespace App\Domains\Articles\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        $this->schema->create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('url_image');
            $table->tinyInteger('state');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('articles');
    }
}