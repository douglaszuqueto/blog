<?php

namespace App\Domains\Tracker\Database\Factories;

use App\Domains\Tracker\Entities\Tracker;
use App\Support\Database\ModelFactory;

class TrackerFactory extends ModelFactory
{

    protected $model = Tracker::class;

    /**
     * @return array
     */
    protected function fields()
    {

        return [
            'tag' => $this->faker->name,
            'state' => 1,
        ];
    }
}