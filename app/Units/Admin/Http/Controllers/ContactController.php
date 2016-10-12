<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class ContactController extends AbstractCrudController
{
    protected $modulo = 'admin';
    protected $page = 'Contact';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param ContactRepository $repository
     */
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

}