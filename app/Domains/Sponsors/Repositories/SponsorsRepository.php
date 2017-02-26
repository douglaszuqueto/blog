<?php

namespace App\Domains\Sponsors\Repositories;

use App\Domains\Sponsors\Entities\Sponsors;
use Prettus\Repository\Eloquent\BaseRepository;

class SponsorsRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return Sponsors::class;
  }
}