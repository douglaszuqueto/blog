<?php

namespace App\Domains\Supporters\Repositories;

use App\Domains\Supporters\Entities\Supporters;
use Prettus\Repository\Eloquent\BaseRepository;

class SupportersRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Supporters::class;
    }
}