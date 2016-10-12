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
            $this->newsRoutes();
            $this->contactRoutes();

        });

    }

    protected function dashboardRoutes()
    {
        $this->router->get('/', ['as' => 'admin.dashboard.index', 'uses' => 'HomeController@index']);
    }

    protected function usersRoutes()
    {
        $this->router->get('/users', ['as' => 'admin.users.index', 'uses' => 'UsersController@index']);
        $this->router->get('/users/{id}', ['as' => 'admin.users.edit', 'uses' => 'UsersController@edit']);
        $this->router->put('/users/{id}', ['as' => 'admin.users.update', 'uses' => 'UsersController@update']);
    }

    protected function newsRoutes()
    {
        $this->router->get('/news/create', ['as' => 'admin.news.create', 'uses' => 'NewsController@create']);
        $this->router->get('/news', ['as' => 'admin.news.index', 'uses' => 'NewsController@index']);
        $this->router->get('/news/{id}', ['as' => 'admin.news.edit', 'uses' => 'NewsController@edit']);
        $this->router->post('/news', ['as' => 'admin.news.store', 'uses' => 'NewsController@store']);
        $this->router->put('/news/{id}', ['as' => 'admin.news.update', 'uses' => 'NewsController@update']);
    }

    protected function articlesRoutes()
    {
        $this->router->get('/articles/create', ['as' => 'admin.articles.create', 'uses' => 'ArticlesController@create']);
        $this->router->get('/articles', ['as' => 'admin.articles.index', 'uses' => 'ArticlesController@index']);
        $this->router->get('/articles/{id}', ['as' => 'admin.articles.edit', 'uses' => 'ArticlesController@edit']);
        $this->router->post('/articles', ['as' => 'admin.articles.store', 'uses' => 'ArticlesController@store']);
        $this->router->put('/articles/{id}', ['as' => 'admin.articles.update', 'uses' => 'ArticlesController@update']);
    }

    protected function contactRoutes()
    {
        $this->router->get('/contact/create', ['as' => 'admin.contact.create', 'uses' => 'ContactController@create']);
        $this->router->get('/contact', ['as' => 'admin.contact.index', 'uses' => 'ContactController@index']);
        $this->router->get('/contact/{id}', ['as' => 'admin.contact.edit', 'uses' => 'ContactController@edit']);
        $this->router->post('/contact', ['as' => 'admin.contact.store', 'uses' => 'ContactController@store']);
        $this->router->put('/contact/{id}', ['as' => 'admin.contact.update', 'uses' => 'ContactController@update']);
    }
}