<?php

namespace App\Units\Authentication\Http\Routes;


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
        $this->router->get('login', ['as' => 'auth.login.index', 'uses' => 'LoginController@index']);
    }
}