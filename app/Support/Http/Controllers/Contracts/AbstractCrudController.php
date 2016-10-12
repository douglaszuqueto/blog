<?php

namespace App\Support\Http\Controllers\Contracts;

use Illuminate\Http\Request;

interface AbstractCrudController
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @return mixed
     */
    public function create();

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request);

    /**
     * @return mixed
     */
    public function edit($id);

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id);
}