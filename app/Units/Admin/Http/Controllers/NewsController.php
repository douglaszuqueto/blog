<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\News\Repositories\NewsRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class NewsController extends AbstractCrudController
{
    protected $modulo = 'admin';
    protected $page = 'News';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param NewsRepository $repository
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

}