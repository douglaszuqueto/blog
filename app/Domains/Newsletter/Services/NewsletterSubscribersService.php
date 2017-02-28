<?php

namespace App\Domains\Newsletter\Services;

use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;

class NewsletterSubscribersService
{
  /**
   * @var NewsletterSubscribersRepository
   */
  private $repository;


  /**
   * NewsletterSubscribersService constructor.
   * @param NewsletterSubscribersRepository $repository
   */
  public function __construct(NewsletterSubscribersRepository $repository)
  {
    $this->repository = $repository;
  }

  public function create($data)
  {
    $subscriber = $this->repository->findWhere(['email' => $data['email']]);

    if (count($subscriber) > 0) {
      return 'Esse email já está cadastrado em nosso sistema.';
    }

    $this->repository->create($data);

    return 'Email cadastrado com sucesso';

  }

}