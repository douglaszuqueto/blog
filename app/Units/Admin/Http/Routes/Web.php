<?php

namespace App\Units\Admin\Http\Routes;

use App\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{

    /**
     * @return mixed
     */
    protected function routes()
    {
        $this->homeRoutes();
    }

    protected function homeRoutes()
    {
        $this->router->get('admin', ['as' => 'admin.dashboard.index', 'uses' => 'HomeController@index']);
        $this->router->get('admin/articles', ['as' => 'admin.articles.index', 'uses' => 'ArticlesController@index']);
        $this->router->get('admin/users', ['as' => 'admin.users.index', 'uses' => 'UsersController@index']);
    }
}