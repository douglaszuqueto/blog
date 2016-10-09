<?php

namespace App\Units\Admin\Providers;

use App\Support\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'admin';

    protected $hasViews = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}
