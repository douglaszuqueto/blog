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
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class GoogleAnalytics
{

    public function __construct()
    {

    }

    public function getTopBrowsers()
    {
        return Cache::remember('statistics:browsers', 60, function () {
            $startDate = Carbon::now()->subYear();
            $endDate = Carbon::now();

            $period = Period::create($startDate, $endDate);

            return Analytics::fetchTopBrowsers($period);
        });

    }

    public function getTopReferrers()
    {
        return Cache::remember('statistics:referrers', 60, function () {
            $startDate = Carbon::now()->subYear();
            $endDate = Carbon::now();

            $period = Period::create($startDate, $endDate);

            return Analytics::fetchTopReferrers($period);
        });

    }

    public function getVisitors($visitors = 30)
    {
        return Cache::remember('statistics:visitors:' . $visitors, 60, function () use ($visitors) {
            $allVisitors = Analytics::fetchVisitorsAndPageViews(Period::days($visitors));
            $visitors = 0;

            foreach ($allVisitors as $visitor) {
                $visitors += $visitor['visitors'];
            }

            return $visitors;
        });

    }

}