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

      $this->suggestionsRoutes();

      $this->newsletterRoutes();

      $this->supportersRoutes();

      $this->sponsorsRoutes();

      $this->contactRoutes();

      $this->usersRoutes();

      $this->categoriesRoutes();

      $this->tagsRoutes();

    });

  }

  protected function dashboardRoutes()
  {
    $this->router->get('/', ['as' => 'admin.dashboard.index', 'uses' => 'HomeController@index']);
  }

  protected function statisticsRoutes()
  {
    $this->router->get('/statistics', ['as' => 'admin.statistics.index', 'uses' => 'StatisticsController@index']);
    $this->router->get('/statistics/github', ['as' => 'admin.statistics.github', 'uses' => 'StatisticsController@github']);
    $this->router->get('/statistics/instagram', ['as' => 'admin.statistics.instagram', 'uses' => 'StatisticsController@instagram']);
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
    $this->router->delete('/news/{id}', ['as' => 'admin.news.remove', 'uses' => 'NewsController@remove']);

  }

  protected function suggestionsRoutes()
  {
    $this->router->get('/suggestions/create', ['as' => 'admin.suggestions.create', 'uses' => 'SuggestionsController@create']);
    $this->router->get('/suggestions', ['as' => 'admin.suggestions.index', 'uses' => 'SuggestionsController@index']);
    $this->router->get('/suggestions/{id}', ['as' => 'admin.suggestions.edit', 'uses' => 'SuggestionsController@edit']);
    $this->router->post('/suggestions', ['as' => 'admin.suggestions.store', 'uses' => 'SuggestionsController@store']);
    $this->router->put('/suggestions/{id}', ['as' => 'admin.suggestions.update', 'uses' => 'SuggestionsController@update']);
    $this->router->delete('/suggestions/{id}', ['as' => 'admin.suggestions.remove', 'uses' => 'SuggestionsController@remove']);

  }

  protected function newsletterRoutes()
  {
    $this->router->get('/newsletter/create', ['as' => 'admin.newsletter.create', 'uses' => 'NewsletterController@create']);
    $this->router->get('/newsletter/subscribers', ['as' => 'admin.newsletter.subscribers', 'uses' => 'NewsletterController@subscribers']);
    $this->router->get('/newsletter', ['as' => 'admin.newsletter.index', 'uses' => 'NewsletterController@index']);
    $this->router->get('/newsletter/{id}', ['as' => 'admin.newsletter.edit', 'uses' => 'NewsletterController@edit']);
    $this->router->post('/newsletter', ['as' => 'admin.newsletter.store', 'uses' => 'NewsletterController@store']);
    $this->router->put('/newsletter/{id}', ['as' => 'admin.newsletter.update', 'uses' => 'NewsletterController@update']);
    $this->router->delete('/newsletter/{id}', ['as' => 'admin.newsletter.remove', 'uses' => 'NewsletterController@remove']);

  }

  protected function articlesRoutes()
  {
    $this->router->get('/articles/create', ['as' => 'admin.articles.create', 'uses' => 'ArticlesController@create']);
    $this->router->get('/articles/shedule', ['as' => 'admin.articles.shedule', 'uses' => 'ArticlesController@shedule']);
    $this->router->post('/articles/shedule', ['as' => 'admin.articles.shedule', 'uses' => 'ArticlesController@sheduleCreate']);
    $this->router->get('/articles', ['as' => 'admin.articles.index', 'uses' => 'ArticlesController@index']);
    $this->router->get('/articles/{id}/preview', ['as' => 'admin.articles.preview', 'uses' => 'ArticlesController@preview']);
    $this->router->get('/articles/{id}/images', ['as' => 'admin.articles.images', 'uses' => 'ArticlesController@images']);
    $this->router->post('/articles/{id}/images', ['as' => 'admin.articles.imagesSave', 'uses' => 'ArticlesController@imagesSave']);
    $this->router->put('/articles/{id}/images/{id_image}', ['as' => 'admin.articles.imagesRemove', 'uses' => 'ArticlesController@imagesRemove']);
    $this->router->get('/articles/{id}', ['as' => 'admin.articles.edit', 'uses' => 'ArticlesController@edit']);
    $this->router->post('/articles', ['as' => 'admin.articles.store', 'uses' => 'ArticlesController@store']);
    $this->router->put('/articles/{id}/tags', ['as' => 'admin.articles.tags', 'uses' => 'ArticlesController@tags']);
    $this->router->put('/articles/{id}', ['as' => 'admin.articles.update', 'uses' => 'ArticlesController@update']);
  }

  protected function sponsorsRoutes()
  {
    $this->router->get('/sponsors/create', ['as' => 'admin.sponsors.create', 'uses' => 'SponsorsController@create']);
    $this->router->get('/sponsors', ['as' => 'admin.sponsors.index', 'uses' => 'SponsorsController@index']);
    $this->router->get('/sponsors/{id}', ['as' => 'admin.sponsors.edit', 'uses' => 'SponsorsController@edit']);
    $this->router->post('/sponsors', ['as' => 'admin.sponsors.store', 'uses' => 'SponsorsController@store']);
    $this->router->put('/sponsors/{id}', ['as' => 'admin.sponsors.update', 'uses' => 'SponsorsController@update']);
    $this->router->delete('/sponsors/{id}', ['as' => 'admin.sponsors.remove', 'uses' => 'SponsorsController@remove']);

  }

  protected function supportersRoutes()
  {
    $this->router->get('/supporters/create', ['as' => 'admin.supporters.create', 'uses' => 'SupportersController@create']);
    $this->router->get('/supporters', ['as' => 'admin.supporters.index', 'uses' => 'SupportersController@index']);
    $this->router->get('/supporters/{id}', ['as' => 'admin.supporters.edit', 'uses' => 'SupportersController@edit']);
    $this->router->post('/supporters', ['as' => 'admin.supporters.store', 'uses' => 'SupportersController@store']);
    $this->router->put('/supporters/{id}', ['as' => 'admin.supporters.update', 'uses' => 'SupportersController@update']);
    $this->router->delete('/supporters/{id}', ['as' => 'admin.supporters.remove', 'uses' => 'SupportersController@remove']);

  }

  protected function contactRoutes()
  {
    $this->router->get('/contact', ['as' => 'admin.contact.index', 'uses' => 'ContactController@index']);
    $this->router->get('/contact/{id}', ['as' => 'admin.contact.view', 'uses' => 'ContactController@edit']);
    $this->router->put('/contact/{id}', ['as' => 'admin.contact.update', 'uses' => 'ContactController@update']);
    $this->router->post('/contact/{id}', ['as' => 'admin.contact.remove', 'uses' => 'ContactController@remove']);
  }

  protected function categoriesRoutes()
  {
    $this->router->get('/categories/create', ['as' => 'admin.categories.create', 'uses' => 'CategoriesController@create']);
    $this->router->get('/categories', ['as' => 'admin.categories.index', 'uses' => 'CategoriesController@index']);
    $this->router->get('/categories/{id}', ['as' => 'admin.categories.edit', 'uses' => 'CategoriesController@edit']);
    $this->router->post('/categories', ['as' => 'admin.categories.store', 'uses' => 'CategoriesController@store']);
    $this->router->put('/categories/{id}', ['as' => 'admin.categories.update', 'uses' => 'CategoriesController@update']);
    $this->router->delete('/categories/{id}', ['as' => 'admin.tags.remove', 'uses' => 'CategoriesController@remove']);

  }

  protected function tagsRoutes()
  {
    $this->router->get('/tags/create', ['as' => 'admin.tags.create', 'uses' => 'TagsController@create']);
    $this->router->get('/tags', ['as' => 'admin.tags.index', 'uses' => 'TagsController@index']);
    $this->router->get('/tags/{id}', ['as' => 'admin.tags.edit', 'uses' => 'TagsController@edit']);
    $this->router->post('/tags', ['as' => 'admin.tags.store', 'uses' => 'TagsController@store']);
    $this->router->put('/tags/{id}', ['as' => 'admin.tags.update', 'uses' => 'TagsController@update']);
    $this->router->delete('/tags/{id}', ['as' => 'admin.tags.remove', 'uses' => 'TagsController@remove']);
  }

}