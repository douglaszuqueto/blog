<?php

namespace App\Domains\Articles\Entities;

use Illuminate\Database\Eloquent\Model;

class ArticlesShedule extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'dt_shedule',
    ];

}
