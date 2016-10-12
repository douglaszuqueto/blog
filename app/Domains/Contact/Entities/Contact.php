<?php

namespace App\Domains\Contact\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subject',
        'message',
        'email',
        'state',
    ];

}
