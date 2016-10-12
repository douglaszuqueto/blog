<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use SEOTools;
    /**
     * @var ContactRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param ContactRepository $repository
     */
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->seo()->setTitle('Contato')->setDescription('listing');
        return $this->view('admin::contact.index', ['contacts' => $this->repository->all()]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view('admin::contact.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.contact.index');
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Contato')->setDescription('edit');
        return $this->view('admin::contact.edit', ['contacts' => $this->repository->find($id)]);
    }


}