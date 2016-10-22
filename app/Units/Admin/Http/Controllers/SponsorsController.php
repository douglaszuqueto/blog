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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->except(['images']);

        $upload = $this->upload($request->file('image'), 100);

        $data['image_name'] = $upload['image_name'];
        $data['image_url'] = $upload['image_url'];


        $this->repository->create($data);

        return redirect()->route('admin.sponsors.index');

    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['images']);


        if ($request->file('image')) {
            $item = $this->repository->find($id);

            if ($item->image_name && file_exists(public_path('uploads/images/') . $item->image_name)) {
                unlink(public_path('uploads/images/') . $item->image_name);
            }
            $upload = $this->upload($request->file('image'), 600);
            $data['image_name'] = $upload['image_name'];
            $data['image_url'] = $upload['image_url'];
        }

        $state = 0;
        if (isset($data['state']) and $data['state'] == 'on') {
            $state = 1;
        }
        $data['state'] = $state;

        $this->repository->update($data, $id);

        return redirect()->route($this->getRoute('index'));
    }

}