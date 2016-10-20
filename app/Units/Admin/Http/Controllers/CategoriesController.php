<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Categories\Repositories\CategoriesRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class CategoriesController extends AbstractCrudController
{

    protected $modulo = 'admin';
    protected $page = 'Categories';
    protected $page_description = 'listing';


    /**
     * CategoriesController constructor.
     * @param CategoriesRepository $repository
     */
    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

}