<?php

namespace App\Units\Home\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return $this->view('home::welcome');
    }
}