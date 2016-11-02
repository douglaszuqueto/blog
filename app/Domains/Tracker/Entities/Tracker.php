<?php

namespace App\Domains\Tracker\Entities;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{

    protected $table = 'tracker';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'http_uri',
        'request_method',
        'remote_addr',
        'remote_host',
        'request_uri',
        'so',
        'browser',
        'user_agent',
    ];

}
