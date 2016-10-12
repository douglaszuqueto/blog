<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Supporters\Repositories\SupportersRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class SupportersController extends AbstractCrudController
{
    protected $modulo = 'admin';
    protected $page = 'Supporters';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param SupportersRepository $repository
     */
    public function __construct(SupportersRepository $repository)
    {
        $this->repository = $repository;
    }

}