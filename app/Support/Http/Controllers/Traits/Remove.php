<?php

namespace App\Support\Http\Controllers\Traits;


use Illuminate\Support\Facades\Storage;

trait Remove
{

  /**
   * @param $id
   * @return array
   */
  public function remove($id)
  {
    $item = $this->repository->find($id);

    if ($item->image_url and file_exists(public_path('uploads/images/') . $item->image_name)) {
      unlink(public_path('uploads/images/') . $item->image_name);
    }

    if (!$item->delete($id)) {
      return [
        'error' => true,
        'error_message' => 'Erro ao excluir o item'
      ];
    };

    return [
      'error' => false,
      'error_message' => 'Item excluído(a) com sucesso'
    ];
  }
}