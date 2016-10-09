<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        return $this->view('admin::users.index');
    }
}