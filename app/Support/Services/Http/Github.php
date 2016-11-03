<?php
/**
 * Created by PhpStorm.
 * User: dzuqueto
 * Date: 11/3/16
 * Time: 8:12 PM
 */

namespace App\Support\Services\Http;


use App\Support\Services\Http\Guzzle\Guzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class Github extends Guzzle
{

    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    public function getRepoInfo($repo)
    {
        /* URL: https://api.github.com/repos/douglaszuqueto/tcc */
        /* URL: https://api.github.com/repos/douglaszuqueto/blog */

        $data = $this->get('https://api.github.com/repos/douglaszuqueto/' . $repo, [
            'headers' => [
                'Authorization' => 'token ' . env('GITHUB_TOKEN')
            ]
        ]);

        return [
            'url' => $data->html_url,
            'stars' => $data->stargazers_count,
            'forks' => $data->forks,
            'subscribers' => $data->subscribers_count,
        ];
    }

    public function cache($repo)
    {
        return Cache::remember('statistics:' . $repo, 60, function () use ($repo) {
            return $this->getRepoInfo($repo);
        });
    }

}