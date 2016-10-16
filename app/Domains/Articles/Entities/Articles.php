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
        'subtitle',
        'text',
        'image',
        'state',
    ];


    public function shedule()
    {
        return $this->hasOne(ArticlesShedule::class, 'article_id', 'id');
    }

}
