<?php

namespace App\Support\Http\Controllers\Traits;


trait Remove
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function remove($id)
    {
        return $this->repository->delete($id);
    }
}