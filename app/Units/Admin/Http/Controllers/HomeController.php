<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * HomeController constructor.
     * @param ArticlesRepository $repository
     * @param ContactRepository $contactRepository
     */
    public function __construct(ArticlesRepository $repository, ContactRepository $contactRepository)
    {
        $this->repository = $repository;
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        return $this->view('admin::dashboard.index', [
            'articles' => $this->getArticlesCount(),
            'contacts' => $this->contactRepository->getContactsCount()
        ]);
    }

    protected function getArticlesCount()
    {
        $articles['pending'] = $this->repository->articlesCount(0);
        $articles['preview'] = $this->repository->articlesCount(1);
        $articles['scheduled'] = $this->repository->articlesCount(2);
        $articles['published'] = $this->repository->articlesCount(3);

        return $articles;
    }
}