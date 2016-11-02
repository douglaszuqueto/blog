<?php

namespace App\Domains\Tracker\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use App\Support\Database\Migration;

class CreateTrackerTable extends Migration
{

    public function up()
    {
        $this->schema->create('tracker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('http_uri');
            $table->string('request_method');
            $table->string('remote_addr');
            $table->string('remote_host');
            $table->string('request_uri');
            $table->string('so');
            $table->string('browser');
            $table->string('user_agent');
            $table->timestamps();
        });
    }


    public function down()
    {
        $this->schema->drop('tracker');
    }
}