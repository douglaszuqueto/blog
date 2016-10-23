<?php

namespace App\Units\Blog\Http\Routes;

use App\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{

    /**
     * @return mixed
     */
    protected function routes()
    {
        $this->router->group(['domain' => env('APP_DOMAIN')], function () {
            $this->homeRoutes();
        });
    }

    protected function homeRoutes()
    {
        $this->router->get('', ['as' => 'blog.index', 'uses' => 'IndexController@index']);
    }
}