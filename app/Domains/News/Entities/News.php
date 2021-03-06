<?php

namespace App\Domains\News\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'url',
    'image_name',
    'image_url',
    'state'
  ];

}
