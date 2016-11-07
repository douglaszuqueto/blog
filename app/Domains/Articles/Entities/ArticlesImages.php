<?php

namespace App\Domains\Articles\Entities;

use Illuminate\Database\Eloquent\Model;

class ArticlesImages extends Model
{

    protected $table = 'articles_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'image_name',
        'image_url',
    ];

}
