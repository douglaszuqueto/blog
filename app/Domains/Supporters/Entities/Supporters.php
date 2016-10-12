<?php

namespace App\Domains\Supporters\Entities;

use Illuminate\Database\Eloquent\Model;

class Supporters extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supporter',
        'url',
        'image',
        'state',
    ];

}
