<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Store
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route($this->getRoute('index'));
    }
}