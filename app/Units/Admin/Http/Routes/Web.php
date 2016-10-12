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
        $this->router->group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

            $this->dashboardRoutes();
            $this->articlesRoutes();
            $this->usersRoutes();
            $this->messagesRoutes();

        });

    }

    protected function dashboardRoutes()
    {
        $this->router->get('/', ['as' => 'admin.dashboard.index', 'uses' => 'HomeController@index']);
    }

    protected function articlesRoutes()
    {
        $this->router->get('/articles', ['as' => 'admin.articles.index', 'uses' => 'ArticlesController@index']);
    }

    protected function usersRoutes()
    {
        $this->router->get('/users', ['as' => 'admin.users.index', 'uses' => 'UsersController@index']);
        $this->router->get('/users/{id}', ['as' => 'admin.users.edit', 'uses' => 'UsersController@edit']);
        $this->router->put('/users/{id}', ['as' => 'admin.users.update', 'uses' => 'UsersController@update']);
    }

    protected function messagesRoutes()
    {
        $this->router->get('/messages', ['as' => 'admin.messages.index', 'uses' => 'MessagesController@index']);
    }
}