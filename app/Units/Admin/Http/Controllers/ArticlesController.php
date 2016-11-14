<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesImagesRepository;
use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Articles\Repositories\ArticlesSheduleRepository;
use App\Domains\Articles\Services\ArticlesService;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;
use Illuminate\Http\Request;

class ArticlesController extends AbstractCrudController
{

    use FileUpload;

    protected $modulo = 'admin';
    protected $page = 'Articles';
    protected $page_description = 'listing';

    /**
     * @var ArticlesSheduleRepository
     */
    private $articlesSheduleRepository;
    /**
     * @var ArticlesService
     */
    private $service;
    /**
     * @var ArticlesImagesRepository
     */
    private $imagesRepository;

    /**
     * UsersController constructor.
     * @param ArticlesRepository $repository
     * @param ArticlesService $service
     * @param ArticlesSheduleRepository $articlesSheduleRepository
     * @param ArticlesImagesRepository $imagesRepository
     */
    public function __construct(
        ArticlesRepository $repository,
        ArticlesService $service,
        ArticlesSheduleRepository $articlesSheduleRepository,
        ArticlesImagesRepository $imagesRepository
    )
    {
        $this->repository = $repository;
        $this->articlesSheduleRepository = $articlesSheduleRepository;
        $this->service = $service;
        $this->imagesRepository = $imagesRepository;
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
                    $article->state = '<a href="' . route('admin.articles.preview', ['id' => $article->id]) . '" target="_blank"><i class="material-icons green-text">open_in_new</i></a>';
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

    public function create()
    {
        $article = $this->repository->create([
            'title' => 'Artigo pré criado'
        ]);

        return redirect()->route($this->getRoute('update'), ['id' => $article->id]);
    }

    public function edit($id)
    {
        return $this->view($this->getView('edit'), [
            'item' => $this->repository->find($id),
        ]);
    }

    public function images($id)
    {
        return $this->view($this->getView('images'), [
            'item' => $this->repository->find($id),
        ]);
    }

    public function imagesSave(Request $request, $id)
    {

        $this->service->imageUpload($request->all(), $id);

        return redirect()->route($this->getRoute('images'), ['id' => $id]);

    }

    public function imagesRemove($id, $id_image)
    {
        return $this->service->imageRemove($id, $id_image);
    }

    public function tags(Request $request, $id)
    {
        $article = $this->repository->find($id);
        return $article->tags()->detach($request->get('tag_id'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->service->update($request->all(), $id)) {
            echo 'erro';
        }
        return redirect()->route($this->getRoute('update'), ['id' => $id]);
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