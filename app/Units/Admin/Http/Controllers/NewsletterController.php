<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Newsletter\Repositories\NewsletterRepository;
use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;
use Illuminate\Support\Facades\Request;

class NewsletterController extends AbstractCrudController
{
  use FileUpload;

  protected $modulo = 'admin';
  protected $page = 'Newsletter';
  protected $page_description = 'listing';

  /**
   * NewsletterController constructor.
   * @param NewsletterRepository $repository
   */
  public function __construct(NewsletterRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param NewsletterSubscribersRepository $subscribersRepository
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function subscribers(NewsletterSubscribersRepository $subscribersRepository)
  {
    return $this->view($this->getView('subscribers'), ['itens' => $subscribersRepository->all()]);
  }

  /**
   * @param Request $request
   * @param $id
   * @param NewsletterSubscribersRepository $subscribersRepository
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function updateSubscribers(Request $request, $id, NewsletterSubscribersRepository $subscribersRepository)
  {
    dd($id);
  }
}