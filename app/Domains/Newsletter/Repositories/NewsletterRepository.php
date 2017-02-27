<?php

namespace App\Domains\Newsletter\Repositories;

use App\Domains\Newsletter\Entities\Newsletter;
use Prettus\Repository\Eloquent\BaseRepository;

class NewsletterRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return Newsletter::class;
  }
}