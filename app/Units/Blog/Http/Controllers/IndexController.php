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
        SEOMeta::setDescription('Conteúdo sobre Internet das Coisas');
        SEOMeta::setCanonical('https://douglaszuqueto.com');

        OpenGraph::setDescription('Conteúdo sobre Internet das Coisas');
        OpenGraph::setTitle('Página Inicial');
        OpenGraph::setUrl('https://douglaszuqueto.com');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/identidade-visual/social-share-default.png');

        $lastArticles = $this->articlesRepository->scopeQuery(function ($query) {
            return $query->orderBy('created_at', 'desc')->where('state', '=', 3)->limit(4);
        })->all();

        return $this->view('blog::index.index', [
            'lastArticles' => $lastArticles
        ]);
    }
}