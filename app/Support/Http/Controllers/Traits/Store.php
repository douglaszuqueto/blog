<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

trait Store
{

  /**
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request)
  {
    $data = $request->all();

    if (isset($data['password'])) {
      $data['password'] = Hash::make($data['password']);
    }

    $this->repository->create($data);

    return redirect()->route($this->getRoute('index'));
  }
}