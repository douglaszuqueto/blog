<?php

namespace App\Domains\Sponsors\Services;

use App\Domains\Sponsors\Repositories\SponsorsRepository;

class SponsorsService
{
  /**
   * @var SponsorsRepository
   */
  private $repository;

  /**
   * SponsorsService constructor.
   * @param SponsorsRepository $repository
   */
  public function __construct(SponsorsRepository $repository)
  {
    $this->repository = $repository;
  }
}