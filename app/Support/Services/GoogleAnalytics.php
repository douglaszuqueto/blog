<?php
/**
 * Created by PhpStorm.
 * User: dzuqueto
 * Date: 11/3/16
 * Time: 8:12 PM
 */

namespace App\Support\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Analytics;
use Spatie\Analytics\Period;

class GoogleAnalytics
{

    public function __construct()
    {

    }

    public function getTopBrowsers()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        $period = Period::create($startDate, $endDate);

        return Analytics::fetchTopBrowsers($period);
    }


    public function getTopReferrers()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        $period = Period::create($startDate, $endDate);

        return Analytics::fetchTopReferrers($period);

    }

    public function getVisitors($visitors = 30)
    {
        $allVisitors = Analytics::fetchVisitorsAndPageViews(Period::days($visitors));
        $visitors = 0;

        foreach ($allVisitors as $visitor) {
            $visitors += $visitor['visitors'];
        }

        return $visitors;
    }

    public function cache($key, $closure)
    {
        return Cache::remember('statistics:' . $key, 60, $closure);
    }

    public function getTopBrowsersCache()
    {
        return $this->cache('browsers', function () {
            return $this->getTopBrowsers();
        });
    }

    public function getTopReferrersCache()
    {
        return $this->cache('referrers', function () {
            return $this->getTopReferrers();
        });
    }

    public function getVisitorsCache($visitors = 30)
    {
        return $this->cache('visitors', function () use ($visitors) {
            return $this->getVisitors($visitors);
        });
    }

}