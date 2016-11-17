<?php

namespace App\Domains\Articles\Services;

use App\Domains\Articles\Repositories\ArticlesImagesRepository;
use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Tags\Repositories\TagsRepository;
use App\Support\Http\Controllers\Traits\FileUpload;
use Illuminate\Support\Facades\Storage;

class ArticlesService
{
    use FileUpload;
    /**
     * @var ArticlesRepository
     */
    private $repository;
    /**
     * @var TagsRepository
     */
    private $tagsRepository;
    /**
     * @var ArticlesImagesRepository
     */
    private $imagesRepository;

    /**
     * ArticlesService constructor.
     * @param ArticlesRepository $repository
     * @param TagsRepository $tagsRepository
     * @param ArticlesImagesRepository $imagesRepository
     */
    public function __construct(ArticlesRepository $repository, TagsRepository $tagsRepository, ArticlesImagesRepository $imagesRepository)
    {
        $this->repository = $repository;
        $this->tagsRepository = $tagsRepository;
        $this->imagesRepository = $imagesRepository;
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

        if (isset($data['image'])) {
            $data['image_name'] = 'capa';

            $image = $this->setPath('articles/' . $this->getArticleName($data['title']) . '/')
                ->upload($data['image'], $data['image_name']);

            $data['image_url'] = $image['image_url'];

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

    protected function getArticleName($title)
    {
        return str_replace(' ', '-', (strtolower($title)));
    }

    protected function getArticleUrl($title)
    {
        $url = 'https://' . env('APP_DOMAIN') . '/artigos/' . $this->getArticleName($title);

        return $url;
    }

    public function imageUpload(array $data, $id)
    {
        $data['image_name'] = $this->getArticleName($data['image_name']);
        $data['article_id'] = $id;

        $image = $this->setPath('articles/' . $this->getArticleName($data['title']) . '/')
            ->upload($data['image'], $data['image_name']);

        $data['image_url'] = $image['image_url'];

        $this->imagesRepository->create($data);

    }

    public function imageRemove($id, $id_image)
    {
        $image = $this->imagesRepository->findWhere(['article_id' => $id, 'id' => $id_image])->first();

        $path = explode('/', $image->image_url);
        $path = '/' . $path[3] . '/' . $path[4] . '/' . $path[5] . '/' . $path[6];
        $path = public_path() . $path;

        unlink($path);

        $this->imagesRepository->delete($id_image);
    }
}