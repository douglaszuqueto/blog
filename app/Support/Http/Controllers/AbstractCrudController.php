<?php

namespace App\Support\Http\Controllers;

use App\Support\Http\Controllers\Traits\Create;
use App\Support\Http\Controllers\Traits\Edit;
use App\Support\Http\Controllers\Traits\Index;
use App\Support\Http\Controllers\Traits\Remove;
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
  use Remove;

}