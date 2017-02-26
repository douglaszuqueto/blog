<?php

namespace App\Domains\Tags\Entities;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'tag',
    'state',
  ];

}
