<?php

namespace App\Domains\Sponsors\Entities;

use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'sponsor',
    'url',
    'image_name',
    'image_url',
    'state',
  ];

}
