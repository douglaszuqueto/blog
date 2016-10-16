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
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        $period = Period::create($startDate, $endDate);

        $topBrowsers = Analytics::fetchTopBrowsers($period);

//        $browsers = [];
//        foreach ($topBrowsers as $value) {
//            $browsers[] = [
//                $value['sessions'];
//        }

        return $this->view($this->getView('index'), [
            'browsers' => json_encode($topBrowsers)
        ]);
    }

}