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
        $data = $request->all();

        $state = 0;

        if (isset($data['state']) and ($data['state'] == 'on') || $data['state'] == 1) {
            $state = 1;
        }
        $data['state'] = $state;

        $this->repository->update($data, $id);

        return redirect()->route($this->getRoute('index'));
    }
}