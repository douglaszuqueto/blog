<?php

namespace App\Domains\Users\Services;

use App\Domains\Users\Repositories\UserRepository;

class UserService
{
  /**
   * @var UserRepository
   */
  private $repository;

  /**
   * UserService constructor.
   * @param UserRepository $repository
   */
  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }
}