<?php

namespace App\Domains\Users\Providers;

use App\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use App\Domains\Users\Database\Factories\UserFactory;
use App\Domains\Users\Database\Seeders\UserSeeder;
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
            CreateUsersTable::class,
            CreatePasswordResetsTable::class
        ]);
    }

    protected function registerFactories()
    {
        (new UserFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            UserSeeder::class,
        ]);
    }
}