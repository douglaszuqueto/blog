<?php

namespace App\Domains\Suggestions\Services;

use App\Domains\Suggestions\Repositories\SuggestionsRepository;

class SuggestionsService
{
  /**
   * @var SuggestionsRepository
   */
  private $repository;


  /**
   * SuggestionsService constructor.
   * @param SuggestionsRepository $repository
   */
  public function __construct(SuggestionsRepository $repository)
  {
    $this->repository = $repository;
  }

  public function updateVote($id)
  {
    $suggestions = $this->repository->find($id);

    if ($this->repository->update(['votes' => $suggestions->votes + 1], $id)) {
      return [
        'error_message' => 'Voto computado com sucesso :)'
      ];
    }

    return [
      'error_message' => 'Erro ao computar seu voto. Por favor tente novamente!'
    ];
  }
}