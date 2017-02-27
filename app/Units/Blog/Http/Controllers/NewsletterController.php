<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{

  public function __construct()
  {
  }

  public function send()
  {
    $newArticle = [
      'title' => 'Configurando o ESP8266 para trabalhar com MQTT',
      'subtitle' => 'Neste artigo iremos tratar do módulo wifi mais badalado do mundo - esp8266 juntamente com o protocolo de IoT MQTT.',
      'url' => 'https://douglaszuqueto.com/artigos/primeiros-passos-com-linkit-smart-7688-duo',
      'image' => 'https://douglaszuqueto.com/uploads/articles/artigo-25/capa.jpg'
    ];

    Mail::queue('emails.test', ['article' => $newArticle], function ($message) {
      $message->to('douglas.zuqueto@gmail.com', 'Douglas Zuqueto')->subject('Welcome');
    });
  }

}