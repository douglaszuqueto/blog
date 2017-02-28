<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Newsletter\Repositories\NewsletterRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;
use Illuminate\Support\Facades\Mail;

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

  public function send($id)
  {
    $newArticle = [
      'title' => 'Configurando o ESP8266 para trabalhar com MQTT',
      'subtitle' => 'Neste artigo iremos tratar do módulo wifi mais badalado do mundo - esp8266 juntamente com o protocolo de IoT MQTT.',
      'url' => 'https://douglaszuqueto.com/artigos/primeiros-passos-com-linkit-smart-7688-duo',
      'image' => 'https://douglaszuqueto.com/uploads/articles/artigo-25/capa.jpg'
    ];

    $subscriber = [
      'name' => 'Douglas Zuqueto',
      'email' => 'douglas.zuqueto@gmail.com'
    ];

    Mail::queue('emails.test', ['article' => $newArticle, 'subscriber' => $subscriber], function ($message) use ($newArticle, $subscriber) {
      $message->to($subscriber['email'], $subscriber['name'])->subject($newArticle['title']);
    });

    $this->repository->update(['send' => 2], $id);

    return redirect()->route('admin.newsletter.index');
  }
}