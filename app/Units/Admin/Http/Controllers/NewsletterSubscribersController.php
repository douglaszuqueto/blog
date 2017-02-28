<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;
use Illuminate\Http\Request;

class NewsletterSubscribersController extends AbstractCrudController
{
  use FileUpload;

  protected $modulo = 'admin';
  protected $page = 'newsletterSubscribers';
  protected $page_description = 'listing';

  /**
   * NewsletterSubscribersController constructor.
   * @param NewsletterSubscribersRepository $repository
   */
  public function __construct(NewsletterSubscribersRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param $id
   * @return array
   */
  public function delete($id)
  {
    if ($this->repository->delete($id)) {
      return [
        'error_message' => 'Assinante removido.'
      ];
    }

    return [
      'error_message' => 'Erro ao remover assinante.'
    ];
  }

  public function update(Request $request, $id)
  {
    $this->repository->update($request->all(), $id);

    return redirect()->route('admin.subscribers.edit', ['id' => $id]);

  }
}