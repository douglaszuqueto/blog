<?php

namespace App\Domains\Categories\Providers;

use App\Domains\Categories\Database\Factories\CategoriesFactory;
use App\Domains\Categories\Database\Migrations\CreateCategoriesTable;
use App\Domains\Categories\Database\Seeders\CategoriesSeeder;
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
      CreateCategoriesTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new CategoriesFactory())->define();
  }

  protected function registerSeeders()
  {
    $this->seeders([
      CategoriesSeeder::class,
    ]);
  }
}