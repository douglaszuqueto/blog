<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Suggestions\Repositories\SuggestionsRepository;
use App\Domains\Suggestions\Services\SuggestionsService;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
  /**
   * @var SuggestionsService
   */
  private $service;

  /**
   * ContactController constructor.
   * @param SuggestionsRepository $repository
   * @param SuggestionsService $service
   */
  public function __construct(SuggestionsRepository $repository, SuggestionsService $service)
  {
    $this->repository = $repository;
    $this->service = $service;
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

    $suggestions = $this->repository->orderBy('votes', 'desc')->findWhereIn('state', [1, 2, 3]);

    $states = [
      1 => 'Esta sugestão está aguardando aprovação.',
      2 => 'Esta sugestão está sendo implementada.',
      3 => 'Esta sugestão foi atendida.',
    ];

    foreach ($suggestions as $key => $value) {
      $state = $states[$suggestions[$key]['state']];

      switch ($suggestions[$key]['state']) {

        case 1:
          $suggestions[$key]['state_'] = "<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='$state'>info</i >";
          break;
        case 2:
          $suggestions[$key]['state_'] = "<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='$state'>done</i >";
          break;
        case 3:
          $suggestions[$key]['state_'] = "<i class='material-icons tooltipped green-text' data-position='top' data-delay='50' data-tooltip='$state'>done</i >";
          break;
      }
    }

    return $this->view('blog::suggestions.index', ['suggestions' => $suggestions]);
  }

  public function send(Request $request)
  {
    if ($this->repository->create($request->all())) {
      return redirect()->route('blog.suggestions.index')->with([
        'message' => 'Sua sugestão foi enviada para análise.'
      ]);
    }
  }

  public function updateVote($id)
  {
    return $this->service->updateVote($id);
  }
}