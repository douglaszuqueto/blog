<?php

namespace App\Support\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools;
use App\Support\Http\Controllers\Contracts\AbstractCrudController as Contract;
use Illuminate\Http\Request;
use Prettus\Repository\Contracts\RepositoryInterface;

abstract class AbstractCrudController extends Controller implements Contract
{

    use SEOTools;

    /**
     * @var RepositoryInterface
     */
    protected $repository;

    protected $modulo;
    protected $page;
    protected $page_description;

    public function index()
    {
        $this->seo()->setTitle($this->page)->setDescription($this->page_description);
        return $this->view(strtolower($this->modulo) . "::" . strtolower($this->page) . '.index', ['itens' => $this->repository->all()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route($this->getRoute('index'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view($this->getView('create'));
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->seo()->setTitle($this->page)->setDescription($this->page_description);

        return $this->view($this->getView('edit'), ['item' => $this->repository->find($id)]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->repository->update($request->all(), $id);

        return redirect()->route($this->getRoute('index'));
    }


    /**
     * @param $action
     * @return string
     */
    protected function getRoute($action)
    {
        return strtolower($this->modulo) . "." . strtolower($this->page) . "." . $action;
    }

    /**
     * @param $action
     * @return string
     */
    protected function getView($action)
    {
        return strtolower($this->modulo) . "::" . strtolower($this->page) . '.' . $action;
    }


}