<?php

namespace App\Domains\Supporters\Services;

use App\Domains\Supporters\Repositories\SupportersRepository;

class SupportersService
{
  /**
   * @var SupportersRepository
   */
  private $repository;

  /**
   * SupportersService constructor.
   * @param SupportersRepository $repository
   */
  public function __construct(SupportersRepository $repository)
  {
    $this->repository = $repository;
  }
}