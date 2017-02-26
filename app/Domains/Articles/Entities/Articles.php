<?php

namespace App\Domains\Articles\Entities;

use App\Domains\Tags\Entities\Tags;
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
    'url',
    'image_name',
    'image_url',
    'text',
    'state',
  ];


  public function shedule()
  {
    return $this->hasOne(ArticlesShedule::class, 'article_id', 'id');
  }

  public function images()
  {
    return $this->hasMany(ArticlesImages::class, 'article_id', 'id');
  }

  public function tags()
  {
    return $this->belongsToMany(Tags::class, 'articles_tags', 'article_id', 'tag_id');
  }

}
