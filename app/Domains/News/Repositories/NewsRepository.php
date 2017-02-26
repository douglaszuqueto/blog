<?php

namespace App\Domains\News\Repositories;

use App\Domains\News\Entities\News;
use Prettus\Repository\Eloquent\BaseRepository;

class NewsRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return News::class;
  }
}