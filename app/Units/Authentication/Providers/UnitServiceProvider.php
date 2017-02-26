<?php

namespace App\Units\Authentication\Providers;

use App\Support\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{

  protected $alias = 'auth';

  protected $hasViews = true;

  protected $providers = [
    EventServiceProvider::class,
    AuthServiceProvider::class,
    RouteServiceProvider::class,
  ];
}
