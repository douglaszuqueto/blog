<?php

namespace App\Domains\Newsletter\Services;

use App\Domains\Newsletter\Repositories\NewsletterRepository;

class NewsletterService
{
  /**
   * @var NewsletterRepository
   */
  private $repository;


  /**
   * NewsletterService constructor.
   * @param NewsletterRepository $repository
   */
  public function __construct(NewsletterRepository $repository)
  {
    $this->repository = $repository;
  }

}