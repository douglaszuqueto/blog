<?php

namespace App\Domains\Sponsors\Database\Factories;

use App\Domains\Sponsors\Entities\Sponsors;
use App\Support\Database\ModelFactory;

class SponsorsFactory extends ModelFactory
{

    protected $model = Sponsors::class;

    /**
     * @return array
     */
    protected function fields()
    {

        return [
            'sponsor' => $this->faker->name,
            'url' => $this->faker->url,
            'image' => $this->faker->url,
            'state' => 1,
        ];
    }
}