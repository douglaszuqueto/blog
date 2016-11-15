<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\News\Repositories\NewsRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

class NewsController extends Controller
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * NewsController constructor.
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        SEOMeta::setTitle('Portal de Notícias');
        SEOMeta::setDescription('Notícias sobre Embarcados, Internet das Coisas, Inovação, Sustentabilidade e Software');
        SEOMeta::setCanonical('https://douglaszuqueto.com/noticias');

        OpenGraph::setTitle('Portal de Notícias');
        OpenGraph::setDescription('Notícias sobre Embarcados, Internet das Coisas, Inovação, Sustentabilidade e Software');
        OpenGraph::setUrl('hhttps://douglaszuqueto.com/noticias');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://douglaszuqueto.com/images/identidade-visual/social-share-default.png');

//        $news = $this->newsRepository->scopeQuery(function ($query) {
//            $query->orderBy('created_at', 'asc');
//            return $query->where('state', '=', 1);
//        })->all();

        return $this->view('blog::news.index', [
//            'news' => $news,
        ]);
    }
}