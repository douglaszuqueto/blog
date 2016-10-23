<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class ArticlesController extends Controller
{
    /**
     * @var ArticlesRepository
     */
    private $articlesRepository;


    /**
     * IndexController constructor.
     * @param ArticlesRepository $articlesRepository
     */
    public function __construct(ArticlesRepository $articlesRepository)
    {
        $this->articlesRepository = $articlesRepository;
    }

    public function index()
    {
        SEOMeta::setTitle('Artigos');
        SEOMeta::setDescription('Conteúdo sobre IoT');
        SEOMeta::setCanonical('https://douglaszuqueto.com/artigos');

        OpenGraph::setTitle('Artigos');
        OpenGraph::setDescription('Conteúdo sobre IoT');
        OpenGraph::setUrl('https://douglaszuqueto.com/artigos');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage(['url' => 'https://douglaszuqueto.com/images/esp8266.jpg', 'size' => 300]);

        $articles = $this->articlesRepository->scopeQuery(function ($query) {
            $query->orderBy('created_at', 'asc');
            return $query->where('state', '=', 1);
        })->all();

        return $this->view('home::articles.index', [
            'articles' => $articles,
        ]);
    }

    public function show($article)
    {
        SEOMeta::setTitle('Artigo 1');
        SEOMeta::setDescription('Controlando Led usando MQTT e ESP8266');
        SEOMeta::setCanonical('https://douglaszuqueto.com/artigos/artigo-1');

//        OpenGraph::setTitle('Artigo 1');
//        OpenGraph::setDescription('Controlando Led usando MQTT e ESP8266');
//        OpenGraph::setUrl('https://douglaszuqueto.com/artigos/artigo-1');
//        OpenGraph::addProperty('type', 'articles');
//        OpenGraph::addImage(['url' => 'https://douglaszuqueto.com/images/esp8266.jpg', 'size' => 300]);

        OpenGraph::setTitle('Artigo 1')
            ->setDescription('Controlando Led usando MQTT e ESP8266')
            ->setType('article')
            ->setArticle([
                'published_time' => '23/10/2016 12:00',
                'author' => 'Douglas Zuqueto',
                'section' => 'IoT',
                'tag' => 'IoT, ESP8266, Arduino, MQTT'
            ])
            ->addImage(['url' => 'https://douglaszuqueto.com/images/esp8266.jpg', 'size' => 300]);


        $article = $this->articlesRepository->scopeQuery(function ($query) use ($article) {
            $query->orderBy('created_at', 'asc');
            return $query->where('state', '=', 1);
        })->first();

        return $this->view('home::articles.show', [
            'article' => $article,
        ]);
    }
}