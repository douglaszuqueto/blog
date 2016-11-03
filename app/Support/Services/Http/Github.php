<?php

namespace App\Support\Services\Http;

use App\Support\Cache\CacheManager;
use App\Support\Services\Http\Guzzle\Guzzle;

class Github extends Guzzle
{
    use CacheManager;

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
        return $this->set('statistics:' . $repo, function () use ($repo) {
            return $this->getRepoInfo($repo);
        });
    }

}