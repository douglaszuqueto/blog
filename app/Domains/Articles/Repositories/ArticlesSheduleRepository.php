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

    public function isShedule($row)
    {
        if (date('Y/m/d', strtotime($row->dt_shedule)) == date('Y/m/d')) {
            return true;
        }
        return false;
    }
}