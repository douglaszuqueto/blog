<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use App\Support\Services\GoogleAnalytics;
use App\Support\Services\Http\Github;
use App\Support\Services\Http\Instagram;

class StatisticsController extends Controller
{
    protected $modulo = 'admin';
    protected $page = 'Statistics';
    protected $page_description = 'listing';

    public function index()
    {
        $analytics = new GoogleAnalytics();

        return $this->view($this->getView('index'), [
            'browsers' => json_encode($analytics->getTopBrowsersCache()),
            'referrers' => json_encode($analytics->getTopReferrersCache()),
            'visitors' => [
                'day' => $analytics->getVisitorsCache(1),
                'month' => $analytics->getVisitorsCache(),
                'all' => $analytics->getVisitorsCache(365),
            ]
        ]);
    }

    public function github()
    {
        $github = new Github();

        return $this->view($this->getView('github'), [
            'tcc' => $github->cache('tcc'),
            'blog' => $github->cache('blog'),
        ]);
    }

    public function instagram()
    {
        return $this->view($this->getView('instagram'), [
            'instagram' => (new Instagram())->cache(),
        ]);
    }

}