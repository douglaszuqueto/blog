<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Suggestions\Repositories\SuggestionsRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class SuggestionsController extends Controller
{

  /**
   * ContactController constructor.
   * @param SuggestionsRepository $repository
   */
  public function __construct(SuggestionsRepository $repository)
  {
    $this->repository = $repository;
  }

  public function index()
  {
    SEOMeta::setTitle('Fábrica de Artigos');
    SEOMeta::setDescription('Deixe uma sugestão de alguma idéia que você gostaria de ver aqui no Douglas Zuqueto');
    SEOMeta::setCanonical('https://douglaszuqueto.com/fabrica-de-artigos');

    OpenGraph::setTitle('Fábrica de Artigos');
    OpenGraph::setDescription('Deixe uma sugestão de alguma idéia que você gostaria de ver aqui no Douglas Zuqueto');
    OpenGraph::setUrl('https://douglaszuqueto.com/fabrica-de-artigos');
    OpenGraph::addProperty('type', 'website');
    OpenGraph::addImage('https://douglaszuqueto.com/images/logo_2.png');

    TwitterCard::addValue('card', 'summary');
    TwitterCard::setTitle('Fábrica de Artigos');
    TwitterCard::setDescription('Deixe uma sugestão de alguma idéia que você gostaria de ver aqui no Douglas Zuqueto');
    TwitterCard::setSite('https://douglaszuqueto.com/fabrica-de-artigos');
    TwitterCard::setUrl('https://douglaszuqueto.com/fabrica-de-artigos');
    TwitterCard::addValue('image', 'https://douglaszuqueto.com/images/logo_2.png');

    return $this->view('blog::suggestions.index');
  }

  public function send(Request $request)
  {
    if ($this->repository->create($request->all())) {
      return redirect()->route('blog.suggestions.index')->with([
        'message' => 'Sua sugestão foi enviada para análise.'
      ]);
    }
  }
}