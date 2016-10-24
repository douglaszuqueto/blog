<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function project()
    {
        return $this->view('blog::project.index');
    }
}