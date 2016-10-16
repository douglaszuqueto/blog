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