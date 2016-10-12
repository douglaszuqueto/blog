<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Users\Repositories\UserRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;

class UsersController extends Controller
{
    use SEOTools;
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->seo()->setTitle('Usuarios')->setDescription('listing');
        return $this->view('admin::users.index', ['users' => $this->repository->all()]);
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Usuarios')->setDescription('edit');
        return $this->view('admin::users.edit', ['user' => $this->repository->find($id)]);
    }
}