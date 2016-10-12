<?php

namespace App\Domains\Articles\Services;

use App\Domains\Articles\Repositories\ArticlesRepository;

class ArticlesService
{
    /**
     * @var ArticlesRepository
     */
    private $repository;

    /**
     * ArticlesService constructor.
     * @param ArticlesRepository $repository
     */
    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }
}