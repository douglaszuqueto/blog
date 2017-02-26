<?php

namespace App\Domains\Suggestions\Providers;

use App\Domains\Suggestions\Database\Factories\SuggestionsFactory;
use App\Domains\Suggestions\Database\Migrations\CreateSuggestionsTable;
use App\Domains\Suggestions\Database\Seeders\SuggestionsSeeder;
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
      CreateSuggestionsTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new SuggestionsFactory())->define();
  }

  protected function registerSeeders()
  {
    $this->seeders([
      SuggestionsSeeder::class,
    ]);
  }
}