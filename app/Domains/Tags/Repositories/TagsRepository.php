<?php

namespace App\Domains\Tags\Repositories;

use App\Domains\Tags\Entities\Tags;
use Prettus\Repository\Eloquent\BaseRepository;

class TagsRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tags::class;
    }
}