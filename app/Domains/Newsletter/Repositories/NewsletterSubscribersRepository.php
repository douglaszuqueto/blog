<?php

namespace App\Domains\Newsletter\Repositories;

use App\Domains\Newsletter\Entities\NewsletterSubscribers;
use Prettus\Repository\Eloquent\BaseRepository;

class NewsletterSubscribersRepository extends BaseRepository
{

  /**
   * Specify Model class name
   *
   * @return string
   */
  public function model()
  {
    return NewsletterSubscribers::class;
  }

  public function getSubscribersCount($state = 1)
  {
    return $this->findWhere(['state' => $state])->count();
  }
}
