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
        $this->router->get('admin', ['as' => 'admin.home.index', 'uses' => 'HomeController@index']);
    }
}