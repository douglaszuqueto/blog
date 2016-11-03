<?php

namespace App\Support\Cache;

use Illuminate\Support\Facades\Cache;

trait CacheManager
{

    public function set($key, $closure)
    {
        return Cache::remember($key, 60, $closure);
    }

}