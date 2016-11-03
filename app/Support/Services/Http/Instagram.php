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

class Instagram extends Guzzle
{

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
        return Cache::remember('statistics:instagram', 60, function () {
            return $this->getMe();
        });
    }

}