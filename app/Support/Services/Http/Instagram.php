<?php

namespace App\Support\Services\Http;

use App\Support\Services\Http\Guzzle\Guzzle;
use GuzzleHttp\Client;
use App\Support\Cache\CacheManager;

class Instagram extends Guzzle
{

    use CacheManager;

    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    public function getMe()
    {
        $data = $this->get('https://api.instagram.com/v1/users/self/?access_token=' . env('INSTAGRAM_TOKEN'))->data;

        return [
            'username' => $data->username,
            'followed_by' => $data->counts->followed_by,
            'follows' => $data->counts->follows,
            'media' => $data->counts->media,
        ];
    }

    public function cache()
    {
        return $this->set('statistics:instagram', function () {
            return $this->getMe();
        });
    }

}