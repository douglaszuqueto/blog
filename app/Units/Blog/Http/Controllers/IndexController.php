<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\News\Repositories\NewsRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;


class IndexController extends Controller
{

    /**
     * @var ArticlesRepository
     */
    private $articlesRepository;

    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * IndexController constructor.
     * @param ArticlesRepository $articlesRepository
     * @param NewsRepository $newsRepository
     */
    public function __construct(ArticlesRepository $articlesRepository, NewsRepository $newsRepository)
    {
        $this->articlesRepository = $articlesRepository;
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        SEOMeta::setTitle('Página Inicial');
        SEOMeta::setDescription('Conteúdo sobre IoT');
        SEOMeta::setCanonical('https://douglaszuqueto.com');

        OpenGraph::setDescription('Conteúdo sobre IoT');
        OpenGraph::setTitle('Página Inicial');
        OpenGraph::setUrl('hhttps://douglaszuqueto.com');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage('https://douglaszuqueto.com/images/esp8266.jpg');

        $articles = $this->articlesRepository->findWhere(['state' => 1]);

        $lastArticles = $this->articlesRepository->scopeQuery(function ($query) {
            $query->orderBy('created_at', 'asc');
            $query->where('state', '=', 1);
            return $query->limit(5);
        })->all();

        return $this->view('home::index.index', [
            'articles' => $articles,
            'lastArticles' => $lastArticles
        ]);
    }
}