<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Contact\Repositories\ContactRepository;
use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;
use App\Domains\Suggestions\Repositories\SuggestionsRepository;
use App\Support\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   * @var ContactRepository
   */
  private $contactRepository;
  /**
   * @var SuggestionsRepository
   */
  private $suggestionsRepository;
  /**
   * @var NewsletterSubscribersRepository
   */
  private $subscribersRepository;

  /**
   * HomeController constructor.
   * @param ArticlesRepository $repository
   * @param ContactRepository $contactRepository
   * @param NewsletterSubscribersRepository $subscribersRepository
   * @param SuggestionsRepository $suggestionsRepository
   */
  public function __construct(
    ArticlesRepository $repository,
    ContactRepository $contactRepository,
    NewsletterSubscribersRepository $subscribersRepository,
    SuggestionsRepository $suggestionsRepository
  )
  {
    $this->repository = $repository;
    $this->contactRepository = $contactRepository;
    $this->suggestionsRepository = $suggestionsRepository;
    $this->subscribersRepository = $subscribersRepository;
  }

  public function index()
  {
    return $this->view('admin::dashboard.index', [
      'articles' => $this->getArticlesCount(),
      'suggestions' => $this->suggestionsRepository->getSuggestionsCount(),
      'subscribers' => $this->subscribersRepository->getSubscribersCount(),
      'contacts' => $this->contactRepository->getContactsCount()
    ]);
  }

  protected function getArticlesCount()
  {
    $articles['pending'] = $this->repository->articlesCount(0);
    $articles['preview'] = $this->repository->articlesCount(1);
    $articles['scheduled'] = $this->repository->articlesCount(2);
    $articles['published'] = $this->repository->articlesCount(3);

    return $articles;
  }
}
