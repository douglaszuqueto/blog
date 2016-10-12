<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Sponsors\Repositories\SponsorsRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    use SEOTools;
    /**
     * @var SponsorsRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param SponsorsRepository $repository
     */
    public function __construct(SponsorsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->seo()->setTitle('Patrocinadores')->setDescription('listing');
        return $this->view('admin::sponsors.index', ['sponsors' => $this->repository->all()]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view('admin::sponsors.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.sponsors.index');
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Patrocinadores')->setDescription('edit');
        return $this->view('admin::sponsors.edit', ['sponsors' => $this->repository->find($id)]);
    }


}