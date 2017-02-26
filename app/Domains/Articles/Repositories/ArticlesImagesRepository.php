<?php

namespace App\Domains\Articles\Repositories;

use App\Domains\Articles\Entities\ArticlesImages;
use Prettus\Repository\Eloquent\BaseRepository;

class ArticlesImagesRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return ArticlesImages::class;
  }

}