<?php

namespace App\Domains\Newsletter\Providers;

use App\Domains\Newsletter\Database\Factories\NewsletterFactory;
use App\Domains\Newsletter\Database\Migrations\CreateNewsletterTable;
use App\Domains\Newsletter\Database\Seeders\NewsletterSeeder;
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
      CreateNewsletterTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new NewsletterFactory())->define();
  }

  protected function registerSeeders()
  {
    $this->seeders([
      NewsletterSeeder::class,
    ]);
  }
}