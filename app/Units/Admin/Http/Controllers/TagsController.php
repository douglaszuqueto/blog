<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Tags\Repositories\TagsRepository;
use App\Support\Http\Controllers\AbstractCrudController;

class TagsController extends AbstractCrudController
{

    protected $modulo = 'admin';
    protected $page = 'Tags';
    protected $page_description = 'listing';

    /**
     * TagsController constructor.
     * @param TagsRepository $repository
     */
    public function __construct(TagsRepository $repository)
    {
        $this->repository = $repository;
    }

}