<?php

namespace App\Units\Blog\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class AboutMeController extends Controller
{

    public function about()
    {
        return $this->view('blog::about-me.index');
    }
}