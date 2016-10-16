<?php

namespace App\Domains\Contact\Repositories;

use App\Domains\Contact\Entities\Contact;
use Prettus\Repository\Eloquent\BaseRepository;

class ContactRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contact::class;
    }

    /**
     * @param int $state
     * @return mixed
     */
    public function getContactsCount($state = 0)
    {
        return $this->findWhere(['state' => $state])->count();
    }
}