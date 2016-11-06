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
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('state')->default(0);
            $table->text('text')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('articles');
    }
}