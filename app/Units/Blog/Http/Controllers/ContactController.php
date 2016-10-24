<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
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
        SEOMeta::setTitle('Contato');
        SEOMeta::setDescription('Entre em contato conosco');
        SEOMeta::setCanonical('https://douglaszuqueto.com/contato');

        OpenGraph::setTitle('Contato');
        OpenGraph::setDescription('Entre em contato conosco');
        OpenGraph::setUrl('hhttps://douglaszuqueto.com/contato');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/IoT.jpg');

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