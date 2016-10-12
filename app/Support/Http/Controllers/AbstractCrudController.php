<?php

namespace App\Support\Http\Controllers;

use App\Support\Http\Controllers\Traits\Create;
use App\Support\Http\Controllers\Traits\Edit;
use App\Support\Http\Controllers\Traits\Index;
use App\Support\Http\Controllers\Traits\Store;
use App\Support\Http\Controllers\Traits\Update;
use Artesaos\SEOTools\Traits\SEOTools;
use App\Support\Http\Controllers\Contracts\AbstractCrudController as Contract;
use Prettus\Repository\Contracts\RepositoryInterface;

abstract class AbstractCrudController extends Controller implements Contract
{

    use SEOTools;

    use Index;
    use Create;
    use Store;
    use Edit;
    use Update;

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