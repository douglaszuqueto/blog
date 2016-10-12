<?php

namespace App\Support\Http\Controllers\Traits;


trait Index
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle($this->page)->setDescription($this->page_description);
        return $this->view(strtolower($this->modulo) . "::" . strtolower($this->page) . '.index', ['itens' => $this->repository->all()]);
    }
}