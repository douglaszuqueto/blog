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
    $this->router->get('login', ['as' => 'auth.index', 'uses' => 'LoginController@index']);
    $this->router->post('login', ['as' => 'auth.index', 'uses' => 'LoginController@login']);
    $this->router->get('logout', ['as' => 'auth.logout', 'uses' => 'LoginController@logout']);
  }
}