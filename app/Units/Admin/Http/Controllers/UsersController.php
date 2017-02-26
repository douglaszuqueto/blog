<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Users\Repositories\UserRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class UsersController extends AbstractCrudController
{
  protected $modulo = 'admin';
  protected $page = 'Users';
  protected $page_description = 'listing';

  /**
   * UsersController constructor.
   * @param UserRepository $repository
   */
  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }

}