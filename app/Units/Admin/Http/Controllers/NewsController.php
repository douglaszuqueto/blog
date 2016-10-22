<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\News\Repositories\NewsRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use App\Support\Http\Controllers\Traits\FileUpload;
use Illuminate\Http\Request;

class NewsController extends AbstractCrudController
{
    use FileUpload;

    protected $modulo = 'admin';
    protected $page = 'News';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     * @param NewsRepository $repository
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $data = $request->except(['images']);

        $upload = $this->upload($request->file('image'), 600);

        $data['image_name'] = $upload['image_name'];
        $data['image_url'] = $upload['image_url'];


        $this->repository->create($data);

        return redirect()->route('admin.news.index');

    }

}