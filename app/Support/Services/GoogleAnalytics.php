<?php

namespace App\Support\Services;

use Carbon\Carbon;
use Analytics;
use Spatie\Analytics\Period;
use App\Support\Cache\CacheManager;

class GoogleAnalytics
{
    use CacheManager;

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

    public function getTopBrowsersCache()
    {
        return $this->set('statistics:browsers', function () {
            return $this->getTopBrowsers();
        });
    }

    public function getTopReferrersCache()
    {
        return $this->set('statistics:referrers', function () {
            return $this->getTopReferrers();
        });
    }

    public function getVisitorsCache($visitors = 30)
    {
        return $this->set('statistics:visitors', function () use ($visitors) {
            return $this->getVisitors($visitors);
        });
    }

}