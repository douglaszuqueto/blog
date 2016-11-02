<?php

namespace App\Domains\Tracker\Providers;

use App\Domains\Tracker\Database\Factories\TrackerFactory;
use App\Domains\Tracker\Database\Migrations\CreateTrackerTable;
use App\Domains\Tracker\Database\Seeders\TrackerSeeder;
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
            CreateTrackerTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new TrackerFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            TrackerSeeder::class,
        ]);
    }
}