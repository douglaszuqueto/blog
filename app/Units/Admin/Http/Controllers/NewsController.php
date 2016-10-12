<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\News\Repositories\NewsRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;

class NewsController extends Controller
{
    use SEOTools;
    /**
     * @var NewsRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param NewsRepository $repository
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->seo()->setTitle('Noticias')->setDescription('listing');
        return $this->view('admin::news.index', ['news' => $this->repository->all()]);
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Noticias')->setDescription('edit');
        return $this->view('admin::news.edit', ['news' => $this->repository->find($id)]);
    }
}