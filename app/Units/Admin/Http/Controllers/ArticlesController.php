<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        return $this->view('admin::articles.index');
    }
}