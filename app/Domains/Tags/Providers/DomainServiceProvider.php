<?php

namespace App\Domains\Tags\Providers;

use App\Domains\Tags\Database\Factories\TagsFactory;
use App\Domains\Tags\Database\Migrations\CreateTagsTable;
use App\Domains\Tags\Database\Seeders\TagsSeeder;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

class DomainServiceProvider extends ServiceProvider
{
  use HasMigrations;

  public function register()
  {
    $this->registerMigrations();
    $this->registerFactories();
    $this->registerSeeders();
  }

  protected function registerMigrations()
  {
    $this->migrations([
      CreateTagsTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new TagsFactory())->define();
  }

  protected function registerSeeders()
  {
    $this->seeders([
      TagsSeeder::class,
    ]);
  }
}