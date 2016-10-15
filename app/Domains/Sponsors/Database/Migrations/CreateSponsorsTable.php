<?php

namespace App\Domains\Sponsors\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateSponsorsTable extends Migration
{

    public function up()
    {
        $this->schema->create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sponsor');
            $table->string('url');
            $table->string('image')->nullable();
            $table->boolean('state')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('sponsors');
    }
}