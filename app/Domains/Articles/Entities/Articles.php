<?php

namespace App\Domains\Articles\Entities;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'url',
    ];

}
