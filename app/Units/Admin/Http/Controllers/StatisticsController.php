<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Analytics;
use Carbon\Carbon;
use Spatie\Analytics\Period;

class StatisticsController extends Controller
{
    protected $modulo = 'admin';
    protected $page = 'Statistics';
    protected $page_description = 'listing';

    /**
     * StatisticsController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {
        $visitors['day'] = $this->getVisitors(1);
        $visitors['month'] = $this->getVisitors();
        $visitors['all'] = $this->getVisitors(365);

        return $this->view($this->getView('index'), [
            'browsers' => json_encode($this->getTopBrowsers()),
            'referrers' => json_encode($this->getTopReferrers()),
            'visitors' => $visitors
        ]);
    }

    protected function getTopBrowsers()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        $period = Period::create($startDate, $endDate);

        return Analytics::fetchTopBrowsers($period);
    }

    protected function getTopReferrers()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        $period = Period::create($startDate, $endDate);

        return Analytics::fetchTopReferrers($period);
    }

    protected function getVisitors($visitors = 30)
    {
        $allVisitors = Analytics::fetchVisitorsAndPageViews(Period::days($visitors));

        $visitors = 0;

        foreach ($allVisitors as $visitor) {
            $visitors += $visitor['visitors'];
        }

        return $visitors;
    }

}