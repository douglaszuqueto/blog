<?php

namespace App\Units\Blog\Providers;

use App\Support\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
  protected $alias = 'blog';

  protected $hasViews = true;

  protected $providers = [
    RouteServiceProvider::class,
  ];
}
