<?php

namespace App\Domains\Suggestions\Repositories;

use App\Domains\Suggestions\Entities\Suggestions;
use Prettus\Repository\Eloquent\BaseRepository;

class SuggestionsRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return Suggestions::class;
  }

  public function getSuggestionsCount($state = 0)
  {
    return $this->findWhere(['state' => $state])->count();
  }
}
