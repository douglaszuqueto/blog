<?php

namespace App\Units\Home\Http\Routes;

use App\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{

    /**
     * @return mixed
     */
    protected function routes()
    {
        $this->router->group(['domain' => 'blog.dev'], function () {
            $this->homeRoutes();
        });
    }

    protected function homeRoutes()
    {
        $this->router->get('', ['as' => 'home.home.index', 'uses' => 'HomeController@index']);
    }
}