<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use Illuminate\Http\Request;

class ArticlesController extends AbstractCrudController
{
    protected $modulo = 'admin';
    protected $page = 'Articles';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param ArticlesRepository $repository
     */
    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function shedule()
    {
        return $this->view($this->getView('shedule'), ['itens' => $this->repository->findWhere(['state' => 0])]);
    }

    public function sheduleCreate(Request $request)
    {

    }

}