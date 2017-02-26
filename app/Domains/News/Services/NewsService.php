<?php

namespace App\Domains\News\Services;

use App\Domains\News\Repositories\NewsRepository;

class NewsService
{
  /**
   * @var NewsRepository
   */
  private $repository;

  /**
   * NewsService constructor.
   * @param NewsRepository $repository
   */
  public function __construct(NewsRepository $repository)
  {
    $this->repository = $repository;
  }
}