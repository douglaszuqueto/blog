<?php

namespace App\Units\Admin\Http\Controllers;

use App\Support\Http\Controllers\AbstractCrudController;

class CategoriesController extends AbstractCrudController
{

    protected $modulo = 'admin';
    protected $page = 'Categories';
    protected $page_description = 'listing';


    public function __construct()
    {

    }

}