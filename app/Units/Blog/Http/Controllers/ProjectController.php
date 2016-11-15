<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class ProjectController extends Controller
{

    public function project()
    {
        SEOMeta::setTitle('Projeto Douglas Zuqueto');
        SEOMeta::setDescription('Este projeto tem como objetivo disseminar conhecimento através de Artigos, Notícias e Videos abordando conteúdos sobre Hardware, Software e Plataformas para IoT');
        SEOMeta::setCanonical('https://douglaszuqueto.com/o-projeto');

        OpenGraph::setTitle('O Projeto');
        OpenGraph::setDescription('Venha conhecer o projeto IoTBr');
        OpenGraph::setUrl('https://douglaszuqueto.com/o-projeto');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/identidade-visual/social-share-default.png');

        return $this->view('blog::project.index');
    }
}