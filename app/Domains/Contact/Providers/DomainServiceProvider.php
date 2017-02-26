<?php

namespace App\Domains\Contact\Providers;

use App\Domains\Contact\Database\Factories\ContactFactory;
use App\Domains\Contact\Database\Migrations\CreateContactTable;
use App\Domains\Contact\Database\Seeders\ContactSeeder;
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
      CreateContactTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new ContactFactory())->define();
  }

  protected function registerSeeders()
  {
    $this->seeders([
      ContactSeeder::class,
    ]);
  }
}