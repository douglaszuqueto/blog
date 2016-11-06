<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Parsedown;

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
        OpenGraph::addImage('https://douglaszuqueto.com/images/IoT.jpg');

        $articles = $this->articlesRepository->scopeQuery(function ($query) {
            $query->orderBy('created_at', 'asc');
            return $query->where('state', '=', 3);
        })->all();

        return $this->view('blog::articles.index', [
            'articles' => $articles,
        ]);
    }

    public function show($article)
    {
        $url = 'https://' . env('APP_DOMAIN') . '/artigos/' . $article;
        $article = $this->articlesRepository->findWhere(['url' => $url])->first();

        if (!$article) {
            return $this->view('blog::error');
        }

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription($article->subtitle);
        SEOMeta::setCanonical($article->url);

        OpenGraph::setTitle($article->title)
            ->setDescription($article->subtitle)
            ->setType('article')
            ->setUrl($article->url)
            ->setArticle([
                'published_time' => $article->created_at,
                'author' => 'Douglas Zuqueto',
//                'section' => 'IoT',
//                'tag' => 'IoT, ESP8266, Arduino, MQTT'
            ])
//            ->addImage(['url' => $article->image, 'size' => 300])
            ->addImage($article->image);

        $markdown = new Parsedown();

        $text = $markdown->text($article->text);
        $article->text = $text;

        $lastArticles = $this->articlesRepository->orderBy('created_at', 'desc')->findWhere(['state' => 3])->take(5);

        return $this->view('blog::articles.show', [
            'article' => $article,
            'lastArticles' => $lastArticles
        ]);
    }
}