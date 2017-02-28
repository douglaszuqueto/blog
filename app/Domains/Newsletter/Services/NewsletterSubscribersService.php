<?php

namespace App\Domains\Newsletter\Services;

use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;

class NewsletterSubscribersService
{
  /**
   * @var NewsletterSubscribersRepository
   */
  private $repository;


  /**
   * NewsletterSubscribersService constructor.
   * @param NewsletterSubscribersRepository $repository
   */
  public function __construct(NewsletterSubscribersRepository $repository)
  {
    $this->repository = $repository;
  }

}