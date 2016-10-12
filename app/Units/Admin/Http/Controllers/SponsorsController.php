<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Sponsors\Repositories\SponsorsRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class SponsorsController extends AbstractCrudController
{
    protected $modulo = 'admin';
    protected $page = 'Sponsors';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param SponsorsRepository $repository
     */
    public function __construct(SponsorsRepository $repository)
    {
        $this->repository = $repository;
    }

}