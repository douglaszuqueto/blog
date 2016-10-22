<?php

namespace App\Support\Http\Controllers\Traits;


trait Remove
{

    /**
     * @param $id
     * @return array
     */
    public function remove($id)
    {
        if (!$this->repository->delete($id)) {
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