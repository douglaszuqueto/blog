<?php

namespace App\Domains\Articles\Repositories;

use App\Domains\Articles\Entities\ArticlesShedule;
use Prettus\Repository\Eloquent\BaseRepository;

class ArticlesSheduleRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ArticlesShedule::class;
    }
}