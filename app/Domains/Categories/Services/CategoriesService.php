<?php

namespace App\Domains\Categories\Services;

use App\Domains\Categories\Repositories\CategoriesRepository;

class CategoriesService
{
    /**
     * @var CategoriesRepository
     */
    private $repository;

    /**
     * SponsorsService constructor.
     * @param CategoriesRepository $repository
     */
    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }
}