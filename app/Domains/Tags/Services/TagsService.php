<?php

namespace App\Domains\Tags\Services;

use App\Domains\Tags\Repositories\TagsRepository;

class TagsService
{
    /**
     * @var TagsRepository
     */
    private $repository;

    /**
     * SponsorsService constructor.
     * @param TagsRepository $repository
     */
    public function __construct(TagsRepository $repository)
    {
        $this->repository = $repository;
    }
}