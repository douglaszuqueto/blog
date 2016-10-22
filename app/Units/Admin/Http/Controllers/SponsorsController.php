<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Sponsors\Repositories\SponsorsRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use Illuminate\Http\Request;
use App\Support\Http\Controllers\Traits\FileUpload;

class SponsorsController extends AbstractCrudController
{
    use FileUpload;

    protected $modulo = 'admin';
    protected $page = 'Sponsors';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param SponsorsRepository $repository
     */
    public function __construct(SponsorsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $data = $request->except(['images']);

        $upload = $this->upload($request->file('image'), 100);

        $data['image_name'] = $upload['image_name'];
        $data['image_url'] = $upload['image_url'];


        $this->repository->create($data);

        return redirect()->route('admin.sponsors.index');

    }

}