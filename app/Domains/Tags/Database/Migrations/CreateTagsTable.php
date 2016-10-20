<?php

namespace App\Domains\Tags\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateTagsTable extends Migration
{

    public function up()
    {
        $this->schema->create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');
            $table->boolean('state')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('tags');
    }
}