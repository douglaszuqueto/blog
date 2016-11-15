<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;

class AboutMeController extends Controller
{

    public function about()
    {
        SEOMeta::setTitle('Sobre mim');
        SEOMeta::setDescription('Confira um pouco mais sobre meu perfil');
        SEOMeta::setCanonical('https://douglaszuqueto.com/sobre-mim');

        OpenGraph::setTitle('Sobre mim');
        OpenGraph::setDescription('Confira um pouco mais sobre meu perfil');
        OpenGraph::setUrl('https://douglaszuqueto.com/sobre-mim');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/identidade-visual/social-share-default.png');

        TwitterCard::addValue('card', 'summary');
        TwitterCard::setTitle('Sobre mim');
        TwitterCard::setDescription('Confira um pouco mais sobre meu perfil');
        TwitterCard::setSite('https://douglaszuqueto.com/sobre-mim');
        TwitterCard::setUrl('https://douglaszuqueto.com/sobre-mim');
        TwitterCard::addValue('image', 'https://douglaszuqueto.com/images/identidade-visual/social-share-default.png');

        return $this->view('blog::about-me.index');
    }
}