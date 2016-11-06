<?php

namespace App\Domains\Articles\Repositories;

use App\Domains\Articles\Entities\ArticlesTags;
use Prettus\Repository\Eloquent\BaseRepository;

class ArticlesTagsRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ArticlesTags::class;
    }

}