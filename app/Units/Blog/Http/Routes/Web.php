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
            $this->indexRoutes();
            $this->articlesRoutes();
        });
    }

    protected function indexRoutes()
    {
        $this->router->get('', ['as' => 'blog.index', 'uses' => 'IndexController@index']);
    }

    protected function articlesRoutes()
    {
        $this->router->get('/artigos', ['as' => 'blog.articles.index', 'uses' => 'ArticlesController@index']);
    }
}