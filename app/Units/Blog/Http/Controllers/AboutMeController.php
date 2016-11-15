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
        SEOMeta::setDescription('Confira um pouco mais sobre meu perfil');
        SEOMeta::setCanonical('https://douglaszuqueto.com/sobre-mim');

        OpenGraph::setTitle('Sobre mim');
        OpenGraph::setDescription('Confira um pouco mais sobre meu perfil');
        OpenGraph::setUrl('hhttps://douglaszuqueto.com/sobre-mim');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/identidade-visual/social-share-default.png');

        return $this->view('blog::about-me.index');
    }
}