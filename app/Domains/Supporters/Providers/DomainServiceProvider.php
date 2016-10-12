<?php

namespace App\Domains\Supporters\Providers;

use App\Domains\Supporters\Database\Factories\SupportersFactory;
use App\Domains\Supporters\Database\Migrations\CreateSupportersTable;
use App\Domains\Supporters\Database\Seeders\SupportersSeeder;
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
            CreateSupportersTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new SupportersFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            SupportersSeeder::class,
        ]);
    }
}