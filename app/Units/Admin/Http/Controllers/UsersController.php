<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Users\Entities\User;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;

class UsersController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle('Users')->setDescription('listing');
        return $this->view('admin::users.index', ['users' => User::all()]);
    }

    public function edit($id)
    {
        return $this->view('admin::users.edit', ['user' => User::find($id)]);
    }
}