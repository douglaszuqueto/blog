<?php

namespace App\Units\Home\Providers;

use App\Support\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'home';

    protected $hasViews = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}
