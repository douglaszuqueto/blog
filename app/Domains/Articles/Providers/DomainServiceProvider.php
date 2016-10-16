<?php

namespace App\Domains\Articles\Providers;

use App\Domains\Articles\Database\Factories\ArticlesFactory;
use App\Domains\Articles\Database\Migrations\CreateArticlesSheduleTable;
use App\Domains\Articles\Database\Migrations\CreateArticlesTable;
use App\Domains\Articles\Database\Seeders\ArticlesSeeder;
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
            CreateArticlesTable::class,
            CreateArticlesSheduleTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new ArticlesFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            ArticlesSeeder::class,
        ]);
    }
}