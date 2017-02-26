<?php

namespace App\Support\Database;

use Illuminate\Database\Migrations\Migration as LaravelMigration;

abstract class Migration extends LaravelMigration
{

  /**
   * @var \Illuminate\Database\Schema\Builder
   */
  protected $schema;

  public function __construct()
  {
    $this->schema = app('db')->connection()->getSchemaBuilder();
  }

  abstract public function up();

  abstract public function down();
}