<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Sponsors\Repositories\SponsorsRepository;
use App\Support\Http\Controllers\AbstractCrudController;
use Illuminate\Http\Request;

class SponsorsController extends AbstractCrudController
{
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

        $image = $request->file('image');
        $data['image_name'] = 'img-' . md5(date('d/m/Y H:i:s')) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $data['image_name'], 'local', 'public');

        $data['image_url'] = asset('storage/images/'. $data['image_name']);

        return $this->repository->create($data);

    }

}