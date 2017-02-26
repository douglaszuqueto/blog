<?php

namespace App\Domains\Suggestions\Services;

use App\Domains\Suggestions\Repositories\SuggestionsRepository;

class SuggestionsService
{
  /**
   * @var SuggestionsRepository
   */
  private $repository;


  /**
   * SuggestionsService constructor.
   * @param SuggestionsRepository $repository
   */
  public function __construct(SuggestionsRepository $repository)
  {
    $this->repository = $repository;
  }
}