<?php

namespace App\Domains\Articles\Console\Commands;

use App\Domains\Articles\Repositories\ArticlesRepository;
use Illuminate\Console\Command;

class Shedule extends Command
{
    /**
     * @var string
     */
    protected $signature = 'shedule';

    public function handle(ArticlesRepository $repository)
    {

    }
}