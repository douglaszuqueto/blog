<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Suggestions\Repositories\SuggestionsRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;

class SuggestionsController extends AbstractCrudController
{
  use FileUpload;

  protected $modulo = 'admin';
  protected $page = 'Suggestions';
  protected $page_description = 'listing';

  /**
   * UsersController constructor.
   * @param SuggestionsRepository $repository
   */
  public function __construct(SuggestionsRepository $repository)
  {
    $this->repository = $repository;
  }

}