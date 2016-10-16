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
        $this->router->group(['domain' => env('APP_DOMAIN_ADMIN'), 'middleware' => ['auth']], function () {

            $this->dashboardRoutes();

            $this->statisticsRoutes();

            $this->articlesRoutes();

            $this->newsRoutes();

            $this->supportersRoutes();

            $this->sponsorsRoutes();

            $this->contactRoutes();

            $this->usersRoutes();

        });

    }

    protected function dashboardRoutes()
    {
        $this->router->get('/', ['as' => 'admin.dashboard.index', 'uses' => 'HomeController@index']);
    }

    protected function statisticsRoutes()
    {
        $this->router->get('/statistics', ['as' => 'admin.statistics.index', 'uses' => 'StatisticsController@index']);
    }

    protected function usersRoutes()
    {
        $this->router->get('/users', ['as' => 'admin.users.index', 'uses' => 'UsersController@index']);
        $this->router->get('/users/create', ['as' => 'admin.users.create', 'uses' => 'UsersController@create']);
        $this->router->get('/users/{id}', ['as' => 'admin.users.edit', 'uses' => 'UsersController@edit']);
        $this->router->put('/users/{id}', ['as' => 'admin.users.update', 'uses' => 'UsersController@update']);
        $this->router->post('/users', ['as' => 'admin.users.store', 'uses' => 'UsersController@store']);
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
        $this->router->get('/articles/shedule', ['as' => 'admin.articles.shedule', 'uses' => 'ArticlesController@shedule']);
        $this->router->post('/articles/shedule', ['as' => 'admin.articles.shedule', 'uses' => 'ArticlesController@sheduleCreate']);
        $this->router->get('/articles', ['as' => 'admin.articles.index', 'uses' => 'ArticlesController@index']);
        $this->router->get('/articles/{id}', ['as' => 'admin.articles.edit', 'uses' => 'ArticlesController@edit']);
        $this->router->post('/articles', ['as' => 'admin.articles.store', 'uses' => 'ArticlesController@store']);
        $this->router->put('/articles/{id}', ['as' => 'admin.articles.update', 'uses' => 'ArticlesController@update']);
    }

    protected function sponsorsRoutes()
    {
        $this->router->get('/sponsors/create', ['as' => 'admin.sponsors.create', 'uses' => 'SponsorsController@create']);
        $this->router->get('/sponsors', ['as' => 'admin.sponsors.index', 'uses' => 'SponsorsController@index']);
        $this->router->get('/sponsors/{id}', ['as' => 'admin.sponsors.edit', 'uses' => 'SponsorsController@edit']);
        $this->router->post('/sponsors', ['as' => 'admin.sponsors.store', 'uses' => 'SponsorsController@store']);
        $this->router->put('/sponsors/{id}', ['as' => 'admin.sponsors.update', 'uses' => 'SponsorsController@update']);
    }

    protected function supportersRoutes()
    {
        $this->router->get('/supporters/create', ['as' => 'admin.supporters.create', 'uses' => 'SupportersController@create']);
        $this->router->get('/supporters', ['as' => 'admin.supporters.index', 'uses' => 'SupportersController@index']);
        $this->router->get('/supporters/{id}', ['as' => 'admin.supporters.edit', 'uses' => 'SupportersController@edit']);
        $this->router->post('/supporters', ['as' => 'admin.supporters.store', 'uses' => 'SupportersController@store']);
        $this->router->put('/supporters/{id}', ['as' => 'admin.supporters.update', 'uses' => 'SupportersController@update']);
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