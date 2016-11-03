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

    /**
     * StatisticsController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {

        $analytics = new GoogleAnalytics();

        return $this->view($this->getView('index'), [
            'browsers' => json_encode($analytics->getTopBrowsers()),
            'referrers' => json_encode($analytics->getTopReferrers()),
            'visitors' => [
                'day' => $analytics->getVisitors(1),
                'month' => $analytics->getVisitors(),
                'all' => $analytics->getVisitors(365),
            ]
        ]);
    }

    public function github()
    {
        $github = app()->make(Github::class);

        return $this->view($this->getView('github'), [
            'tcc' => $github->cache('tcc'),
            'blog' => $github->cache('blog'),
        ]);
    }

    public function instagram()
    {
        $instagram = app()->make(Instagram::class);

        return $this->view($this->getView('instagram'), [
            'instagram' => $instagram->cache(),
        ]);
    }

}