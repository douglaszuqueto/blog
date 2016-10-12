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
            $table->string('title');
            $table->string('subject');
            $table->string('message');
            $table->string('email');
            $table->tinyInteger('state');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('contacts');
    }
}