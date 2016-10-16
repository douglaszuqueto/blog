<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Support\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * HomeController constructor.
     * @param ArticlesRepository $repository
     */
    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $articles['pendent'] = $this->repository->articlesCount(0);
        $articles['preview'] = $this->repository->articlesCount(2);
        $articles['shedule'] = $this->repository->articlesCount(1);
        $articles['published'] = $this->repository->articlesCount(3);

        return $this->view('admin::dashboard.index', ['articles' => $articles]);
    }
}