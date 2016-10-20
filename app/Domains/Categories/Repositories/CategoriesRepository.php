<?php

namespace App\Domains\Categories\Repositories;

use App\Domains\Categories\Entities\Categories;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoriesRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categories::class;
    }
}