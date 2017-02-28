<?php

namespace App\Domains\Newsletter\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscribers extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'email',
    'state'
  ];

}
