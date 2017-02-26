<?php

namespace App\Domains\Categories\Entities;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'category',
    'state',
  ];

}
