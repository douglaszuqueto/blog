<?php

namespace App\Support\Http\Controllers\Traits;


trait Create
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view($this->getView('create'));
    }
}