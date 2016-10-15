<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    protected $modulo = 'admin';
    protected $page = 'Statistics';
    protected $page_description = 'listing';

    /**
     * UsersController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {

        return $this->view('admin::statistics.index');
    }

}