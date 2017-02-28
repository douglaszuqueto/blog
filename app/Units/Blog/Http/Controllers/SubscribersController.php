<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Newsletter\Repositories\NewsletterRepository;
use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;
use App\Domains\Newsletter\Services\NewsletterService;
use App\Domains\Newsletter\Services\NewsletterSubscribersService;
use App\Support\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
  /**
   * @var NewsletterSubscribersService
   */
  private $service;


  /**
   * SubscribersController constructor.
   * @param NewsletterSubscribersRepository $repository
   * @param NewsletterSubscribersService $service
   */
  public function __construct(NewsletterSubscribersRepository $repository, NewsletterSubscribersService $service)
  {

    $this->repository = $repository;
    $this->service = $service;
  }

  public function index()
  {
    return $this->view('blog::newsletter.index');
  }

  public function send(Request $request)
  {
    $subscriber = $this->service->create($request->all());

    return redirect()->route('blog.newsletter.index')->with([
      'message' => $subscriber
    ]);
  }

}