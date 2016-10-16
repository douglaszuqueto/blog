<?php

namespace App\Domains\Articles\Console\Commands;

use App\Domains\Articles\Repositories\ArticlesSheduleRepository;
use Illuminate\Console\Command;

class Shedule extends Command
{
    /**
     * @var string
     */
    protected $signature = 'shedule';

    public function handle(ArticlesSheduleRepository $repository)
    {
        $shedules = $repository->findWhere(['state' => 0]);

        foreach ($shedules as $row) {
            if ($repository->isShedule($row)) {
                $repository->update(['state' => 1], $row->id);
            }
        }
    }
}