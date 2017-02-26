<?php

namespace App\Domains\News\Providers;

use App\Domains\News\Database\Factories\NewsFactory;
use App\Domains\News\Database\Migrations\CreateNewsTable;
use App\Domains\News\Database\Seeders\NewsSeeder;
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
      CreateNewsTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new NewsFactory())->define();
  }

  protected function registerSeeders()
  {
    $this->seeders([
      NewsSeeder::class,
    ]);
  }
}