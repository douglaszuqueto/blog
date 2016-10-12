<?php

namespace App\Domains\Sponsors\Providers;

use App\Domains\Sponsors\Database\Factories\SponsorsFactory;
use App\Domains\Sponsors\Database\Migrations\CreateSponsorsTable;
use App\Domains\Sponsors\Database\Seeders\SponsorsSeeder;
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
            CreateSponsorsTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new SponsorsFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            SponsorsSeeder::class,
        ]);
    }
}