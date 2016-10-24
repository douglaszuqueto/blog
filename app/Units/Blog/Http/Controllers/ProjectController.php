<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class ProjectController extends Controller
{

    public function project()
    {
        SEOMeta::setTitle('O Projeto');
        SEOMeta::setDescription('Venha conhecer o projeto IoTBr');
        SEOMeta::setCanonical('https://douglaszuqueto.com/o-projeto');

        OpenGraph::setTitle('O Projeto');
        OpenGraph::setDescription('Venha conhecer o projeto IoTBr');
        OpenGraph::setUrl('hhttps://douglaszuqueto.com/o-projeto');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/IoT.jpg');

        return $this->view('blog::project.index');
    }
}