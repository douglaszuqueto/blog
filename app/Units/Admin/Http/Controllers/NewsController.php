<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\News\Repositories\NewsRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

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


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view('admin::news.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.news.index');
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Noticias')->setDescription('edit');
        return $this->view('admin::news.edit', ['news' => $this->repository->find($id)]);
    }


}