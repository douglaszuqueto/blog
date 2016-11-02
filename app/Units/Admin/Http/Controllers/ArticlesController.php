<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Articles\Repositories\ArticlesSheduleRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use DateTime;
use Illuminate\Http\Request;

class ArticlesController extends AbstractCrudController
{
    protected $modulo = 'admin';
    protected $page = 'Articles';
    protected $page_description = 'listing';

    /**
     * @var ArticlesSheduleRepository
     */
    private $articlesSheduleRepository;

    /**
     * UsersController constructor.
     * @param ArticlesRepository $repository
     * @param ArticlesSheduleRepository $articlesSheduleRepository
     */
    public function __construct(ArticlesRepository $repository, ArticlesSheduleRepository $articlesSheduleRepository)
    {
        $this->repository = $repository;
        $this->articlesSheduleRepository = $articlesSheduleRepository;
    }

    public function index()
    {
        $articles = $this->repository->orderBy('state')->orderBy('created_at')->all();

        foreach ($articles as $article) {

            switch ($article->state) {

                case 0:
                    $article->state = '<i class="material-icons">visibility</i>';
                    break;
                case 1:
                    /*
                     * Implementar Funcionalidade de Preview do Artigo
                     */
                    $article->state = '<a href="' . $article->url . '" target="_blank"><i class="material-icons green-text">open_in_new</i></a>';
                    break;
                case 2:
                    $article->state = '<i title="Agendado" class="material-icons green-text">snooze</i>';
                    break;
                case 3:
                    $article->state = '<i title="Publicado" class="material-icons green-text">visibility</i>';
                    break;
            }
        }


        return $this->view('admin::articles.index', [
            'itens' => $articles
        ]);
    }

    public function preview($id)
    {
        $article = $this->repository->find($id);

        $markdown = new \Parsedown();

        $text = $markdown->text($article->text);

        return $this->view('admin::articles.preview', [
            'item' => $article,
            'text' => $text
        ]);
    }

    protected function getArticleUrl($title)
    {
        $title = str_replace(' ', '-', (strtolower($title)));

        $url = 'https://' . env('APP_DOMAIN') . '/artigos/' . $title;

        return $url;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['url'] = $this->getArticleUrl($data['title']);

        $this->repository->create($data);

        return redirect()->route($this->getRoute('index'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $this->repository->update($data, $id);

        return redirect()->route($this->getRoute('index'));
    }

    public function shedule()
    {

        $shedules = [];

        foreach ($this->repository->findWhere(['state' => 1]) as $key => $row) {

            $shedule = $row->shedule()->where(['state' => 0])->first(['dt_shedule']);
            if ($shedule) {
                $shedules[$key]['id'] = $row->id;
                $shedules[$key]['article'] = $row->title;
                $shedules[$key]['dt_shedule'] = date('d/m/Y', strtotime($shedule['dt_shedule']));
            }
        }

        return $this->view($this->getView('shedule'), [
            'itens' => $this->repository->findWhere(['state' => 0]),
            'shedules' => $shedules
        ]);
    }

    public function sheduleCreate(Request $request)
    {
        $data = $request->all();

        $this->repository->update(['state' => 1], $data['article_id']);
        $this->articlesSheduleRepository->create($data);

        return redirect()->route('admin.articles.shedule');
    }

}