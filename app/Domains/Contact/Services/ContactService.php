<?php

namespace App\Domains\Contact\Services;

use App\Domains\Contact\Repositories\ContactRepository;

class ContactService
{
  /**
   * @var ContactRepository
   */
  private $repository;

  /**
   * ContactService constructor.
   * @param ContactRepository $repository
   */
  public function __construct(ContactRepository $repository)
  {
    $this->repository = $repository;
  }
}