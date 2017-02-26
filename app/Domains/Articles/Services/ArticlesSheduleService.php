<?php

namespace App\Domains\Articles\Services;

use App\Domains\Articles\Repositories\ArticlesSheduleRepository;

class ArticlesSheduleService
{
  /**
   * @var ArticlesSheduleRepository
   */
  private $repository;

  /**
   * ArticlesService constructor.
   * @param ArticlesSheduleRepository $repository
   */
  public function __construct(ArticlesSheduleRepository $repository)
  {
    $this->repository = $repository;
  }
}