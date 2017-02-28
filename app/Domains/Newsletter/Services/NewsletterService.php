<?php

namespace App\Domains\Newsletter\Services;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Newsletter\Repositories\NewsletterRepository;
use App\Domains\Newsletter\Repositories\NewsletterSubscribersRepository;
use Illuminate\Support\Facades\Mail;

class NewsletterService
{
  /**
   * @var NewsletterRepository
   */
  private $repository;
  /**
   * @var NewsletterSubscribersRepository
   */
  private $subscribersRepository;
  /**
   * @var ArticlesRepository
   */
  private $articlesRepository;


  /**
   * NewsletterService constructor.
   * @param NewsletterRepository $repository
   * @param NewsletterSubscribersRepository $subscribersRepository
   * @param ArticlesRepository $articlesRepository
   */
  public function __construct(
    NewsletterRepository $repository,
    NewsletterSubscribersRepository $subscribersRepository,
    ArticlesRepository $articlesRepository
  )
  {
    $this->repository = $repository;
    $this->subscribersRepository = $subscribersRepository;
    $this->articlesRepository = $articlesRepository;
  }

  public function sendNewsletter($id)
  {
    $lastArticles = $this->articlesRepository->orderBy('created_at', 'desc')->findWhere(['state' => 3])->take(1)[0];

    $subscribers = $this->subscribersRepository->findWhere(['state' => 1]);

    $article = [
      'title' => $lastArticles->title,
      'subtitle' => $lastArticles->subtitle,
      'url' => $lastArticles->url,
      'image' => $lastArticles->image_url,
    ];

    foreach ($subscribers as $s) {
      $subscriber = [
        'name' => $s->name,
        'email' => $s->email
      ];

      $this->sendMail($article, $subscriber);

    }
    $newsletter = $this->repository->find($id);

    if ($newsletter->send == 0) {
      $this->repository->update(['send' => 1], $id);
    } else if ($newsletter->send == 1) {
      $this->repository->update(['send' => 2], $id);
    }

  }

  protected function sendMail($article, $subscriber)
  {
    Mail::queue('emails.test', ['article' => $article, 'subscriber' => $subscriber], function ($message) use ($article, $subscriber) {
      $message->to($subscriber['email'], $subscriber['name'])->subject($article['title']);
    });
  }

  public function create($all)
  {

  }

}