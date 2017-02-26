<?php

namespace App\Domains\Articles\Entities;

use Illuminate\Database\Eloquent\Model;

class ArticlesTags extends Model
{

  protected $table = 'articles_tags';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'article_id',
    'tag_id',
  ];

}
