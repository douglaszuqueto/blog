<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * @var ContactRepository
   */
  private $contactRepository;

  /**
   * ContactController constructor.
   * @param ContactRepository $contactRepository
   */
  public function __construct(ContactRepository $contactRepository)
  {
    $this->contactRepository = $contactRepository;
  }

  public function index()
  {
    SEOMeta::setTitle('Formulário de Contato');
    SEOMeta::setDescription('Alguma dúvida, reclamação ou sugestão? Entre já em contato conosco :P');
    SEOMeta::setCanonical('https://douglaszuqueto.com/contato');

    OpenGraph::setTitle('Formulário de Contato');
    OpenGraph::setDescription('Alguma dúvida, reclamação ou sugestão? Entre já em contato conosco :P');
    OpenGraph::setUrl('https://douglaszuqueto.com/contato');
    OpenGraph::addProperty('type', 'website');
    OpenGraph::addImage('https://douglaszuqueto.com/images/logo_2.png');

    TwitterCard::addValue('card', 'summary');
    TwitterCard::setTitle('Formulário de Contato');
    TwitterCard::setDescription('Alguma dúvida, reclamação ou sugestão? Entre já em contato conosco :P');
    TwitterCard::setSite('https://douglaszuqueto.com/contato');
    TwitterCard::setUrl('https://douglaszuqueto.com/contato');
    TwitterCard::addValue('image', 'https://douglaszuqueto.com/images/logo_2.png');

    return $this->view('blog::contact.index');
  }

  public function send(Request $request)
  {
    if ($this->contactRepository->create($request->all())) {
      return redirect()->route('blog.contact.index')->with([
        'message' => 'Sua solicitação foi enviada. Aguarde nosso Retorno.'
      ]);
    }
  }
}