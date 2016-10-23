<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Analytics;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Psr\Http\Message\ResponseInterface;
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

    public function github()
    {
        $visitors['day'] = $this->getVisitors(1);
        $visitors['month'] = $this->getVisitors();
        $visitors['all'] = $this->getVisitors(365);

        return $this->view($this->getView('github'), [
            'tcc' => ($this->getRepoInfo('tcc')),
            'blog' => ($this->getRepoInfo('blog')),
        ]);
    }

    protected function getRepoInfo($repo)
    {
        /* URL: https://api.github.com/repos/douglaszuqueto/tcc */
        /* URL: https://api.github.com/repos/douglaszuqueto/blog */

        return Cache::remember('statistics:' . $repo, 60, function () use ($repo) {
            $client = new Client();
            $promise = $client->getAsync('https://api.github.com/repos/douglaszuqueto/' . $repo, [
                'headers' => [
                    'Authorization' => 'token ' . env('GITHUB_TOKEN')
                ]
            ]);
            $response = $promise->wait();

            $data = json_decode($response->getbody());
            return [
                'stars' => $data->stargazers_count,
                'forks' => $data->forks,
                'subscribers' => $data->subscribers_count,
            ];
        });
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