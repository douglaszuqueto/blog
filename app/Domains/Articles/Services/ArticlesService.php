<?php

namespace App\Domains\Articles\Services;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Tags\Repositories\TagsRepository;

class ArticlesService
{
    /**
     * @var ArticlesRepository
     */
    private $repository;
    /**
     * @var TagsRepository
     */
    private $tagsRepository;

    /**
     * ArticlesService constructor.
     * @param ArticlesRepository $repository
     * @param TagsRepository $tagsRepository
     */
    public function __construct(ArticlesRepository $repository, TagsRepository $tagsRepository)
    {
        $this->repository = $repository;
        $this->tagsRepository = $tagsRepository;
    }

    public function update(array $data, $id)
    {
        if (empty($data['url'])) {
            $data['url'] = $this->getArticleUrl($data['title']);
        }

        if (!empty($data['tags'])) {

            $article = $this->repository->findWhere(['id' => $id])->first();

            $this->attachTag($data['tags'], $article);

        }

        if (!$this->repository->update($data, $id)) {
            return false;
        }

        return true;
    }

    protected function attachTag($tags, $article)
    {
        foreach ($tags as $tag) {
            $_tag = $this->tagsRepository->findWhere(['tag' => $tag])->first();
            if ($_tag) {
                $article->tags()->attach($_tag->id);
            }
        }
    }

    protected function getArticleUrl($title)
    {
        $title = str_replace(' ', '-', (strtolower($title)));

        $url = 'https://' . env('APP_DOMAIN') . '/artigos/' . $title;

        return $url;
    }
}