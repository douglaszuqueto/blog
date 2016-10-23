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
        return $this->view($this->getView('github'), [
            'tcc' => ($this->getRepoInfo('tcc')),
            'blog' => ($this->getRepoInfo('blog')),
        ]);
    }

    public function instagram()
    {
        return $this->view($this->getView('instagram'), [
            'instagram' => ($this->getInfoInstagram()),
        ]);
    }

    public function getInfoInstagram()
    {
        return Cache::remember('statistics:instagram', 60, function () {
            $client = new Client();
            $promise = $client->getAsync('https://api.instagram.com/v1/users/self/?access_token=' . env('INSTAGRAM_TOKEN'));
            $response = $promise->wait();

            $data = (json_decode($response->getbody()))->data;
            return [
                'username' => $data->username,
                'followed_by' => $data->counts->followed_by,
                'follows' => $data->counts->follows,
                'media' => $data->counts->media,
            ];
        });

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
                'url' => $data->html_url,
                'stars' => $data->stargazers_count,
                'forks' => $data->forks,
                'subscribers' => $data->subscribers_count,
            ];
        });
    }

    protected function getTopBrowsers()
    {
        return Cache::remember('statistics:browsers', 60, function () {
            $startDate = Carbon::now()->subYear();
            $endDate = Carbon::now();

            $period = Period::create($startDate, $endDate);

            return Analytics::fetchTopBrowsers($period);
        });

    }

    protected function getTopReferrers()
    {
        return Cache::remember('statistics:referrers', 60, function () {
            $startDate = Carbon::now()->subYear();
            $endDate = Carbon::now();

            $period = Period::create($startDate, $endDate);

            return Analytics::fetchTopReferrers($period);
        });

    }

    protected function getVisitors($visitors = 30)
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