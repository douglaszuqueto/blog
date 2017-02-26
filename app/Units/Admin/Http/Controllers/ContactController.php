<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class ContactController extends AbstractCrudController
{
  protected $modulo = 'admin';
  protected $page = 'Contact';
  protected $page_description = 'listing';

  /**
   * UsersController constructor.
   * @param ContactRepository $repository
   */
  public function __construct(ContactRepository $repository)
  {
    $this->repository = $repository;
  }

}