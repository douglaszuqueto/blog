<?php

namespace App\Support\Http\Controllers\Traits;


trait Edit
{

  /**
   * @param $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function edit($id)
  {
    $this->seo()->setTitle($this->page)->setDescription($this->page_description);

    return $this->view($this->getView('edit'), ['item' => $this->repository->find($id)]);
  }
}