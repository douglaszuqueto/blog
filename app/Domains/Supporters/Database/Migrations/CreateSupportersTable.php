<?php

namespace App\Domains\Supporters\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateSupportersTable extends Migration
{

    public function up()
    {
        $this->schema->create('supporters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supporter');
            $table->string('url');
            $table->string('image');
            $table->boolean('state');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('supporters');
    }
}