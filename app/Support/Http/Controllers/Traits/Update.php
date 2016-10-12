<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Update
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->repository->update($request->all(), $id);

        return redirect()->route($this->getRoute('index'));
    }
}