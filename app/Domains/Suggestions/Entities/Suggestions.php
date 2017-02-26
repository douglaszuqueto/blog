<?php

namespace App\Domains\Suggestions\Entities;

use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'description',
    'name',
    'email',
    'votes',
    'state'
  ];

}
