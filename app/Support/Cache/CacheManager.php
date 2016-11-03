<?php

namespace App\Support\Cache;

use Illuminate\Support\Facades\Cache;

trait CacheManager
{

    protected $timeToLive = 60;

    public function set($key, $closure)
    {
        return Cache::remember($key, $this->timeToLive, $closure);
    }

}