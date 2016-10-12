<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Supporters\Repositories\SupportersRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class SupportersController extends Controller
{
    use SEOTools;
    /**
     * @var SupportersRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param SupportersRepository $repository
     */
    public function __construct(SupportersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->seo()->setTitle('Apoiadores')->setDescription('listing');
        return $this->view('admin::supporters.index', ['supporters' => $this->repository->all()]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view('admin::supporters.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.supporters.index');
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Apoiadores')->setDescription('edit');
        return $this->view('admin::supporters.edit', ['supporters' => $this->repository->find($id)]);
    }


}