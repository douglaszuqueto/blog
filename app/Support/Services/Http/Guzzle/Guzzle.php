<?php

namespace App\Support\Services\Http\Guzzle;

use GuzzleHttp\Client;

class Guzzle
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Guzzle constructor.
     */
    public function __construct()
    {
        $this->client = app()->make(Client::class);
    }

    public function get($url, $params = [])
    {
        $promise = $this->client->getAsync($url, $params);
        $response = $promise->wait();
        return json_decode($response->getbody());
    }
}