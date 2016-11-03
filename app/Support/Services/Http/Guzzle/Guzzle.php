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
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get($url, $parans = [])
    {
        $promise = $this->client->getAsync($url);
        $response = $promise->wait();

        return json_decode($response->getbody());
    }
}