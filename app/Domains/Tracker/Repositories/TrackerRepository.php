<?php

namespace App\Domains\Tracker\Repositories;

use App\Domains\Tracker\Entities\Tracker;
use Prettus\Repository\Eloquent\BaseRepository;

class TrackerRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tracker::class;
    }
}