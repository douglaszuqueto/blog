<?php

namespace App\Support\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    if (isset($data['password'])) {
      $data['password'] = Hash::make($data['password']);
    }

    if (isset($data['state'])) {
      $state = $data['state'];
    }
    $data['state'] = $state;

    $this->repository->update($data, $id);

    return redirect()->route($this->getRoute('edit'), ['id' => $id]);
  }
}