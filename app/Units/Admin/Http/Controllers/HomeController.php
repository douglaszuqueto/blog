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
        return $this->view('admin::dashboard.index', ['articles' => $this->getArticlesCount()]);
    }

    protected function getArticlesCount()
    {
        $articles['pending'] = $this->repository->articlesCount(0);
        $articles['preview'] = $this->repository->articlesCount(2);
        $articles['scheduled'] = $this->repository->articlesCount(1);
        $articles['published'] = $this->repository->articlesCount(3);

        return $articles;
    }
}