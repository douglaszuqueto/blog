<?php

namespace App\Support\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  /**
   * @param $view
   * @param array $data
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function view($view, $data = [])
  {
    return view($view, $data);
  }

  /**
   * @var RepositoryInterface
   */
  protected $repository;

  /**
   * @var $modulo
   */
  protected $modulo;

  /**
   * @var $page
   */
  protected $page;

  /**
   * @var $page_description
   */
  protected $page_description;

  /**
   * @param $action
   * @return string
   */
  protected function getRoute($action)
  {
    return strtolower($this->modulo) . "." . strtolower($this->page) . "." . $action;
  }

  /**
   * @param $action
   * @return string
   */
  protected function getView($action)
  {
    return strtolower($this->modulo) . "::" . strtolower($this->page) . '.' . $action;
  }
}
