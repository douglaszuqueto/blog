<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return $this->view('admin::index');
    }
}