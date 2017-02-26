<?php

namespace App\Domains\Articles\Repositories;

use App\Domains\Articles\Entities\Articles;
use Prettus\Repository\Eloquent\BaseRepository;

class ArticlesRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return Articles::class;
  }

  public function articlesCount($state = 3)
  {
    return $this->findWhere(['state' => $state])->count();
  }
}