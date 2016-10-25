<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class AboutMeController extends Controller
{

    public function about()
    {
        SEOMeta::setTitle('Sobre mim');
        SEOMeta::setDescription('Página destinada ao meu perfil');
        SEOMeta::setCanonical('https://douglaszuqueto.com/sobre-mim');

        OpenGraph::setTitle('Sobre mim');
        OpenGraph::setDescription('Página destinada ao meu perfil');
        OpenGraph::setUrl('hhttps://douglaszuqueto.com/sobre-mim');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/IoT.jpg');

        return $this->view('blog::about-me.index');
    }
}