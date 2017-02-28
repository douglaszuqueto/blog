<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Newsletter\Repositories\NewsletterRepository;
use App\Domains\Newsletter\Services\NewsletterService;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;

class NewsletterController extends AbstractCrudController
{
  use FileUpload;

  protected $modulo = 'admin';
  protected $page = 'Newsletter';
  protected $page_description = 'listing';
  /**
   * @var NewsletterService
   */
  private $service;

  /**
   * NewsletterController constructor.
   * @param NewsletterRepository $repository
   * @param NewsletterService $service
   */
  public function __construct(NewsletterRepository $repository, NewsletterService $service)
  {
    $this->repository = $repository;
    $this->service = $service;
  }

  public function send($id)
  {

    $this->service->sendNewsletter($id);

    return redirect()->route('admin.newsletter.index');

  }
}