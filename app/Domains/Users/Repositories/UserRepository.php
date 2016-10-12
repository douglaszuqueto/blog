<?php

namespace App\Domains\Users\Repositories;

use App\Domains\Users\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}