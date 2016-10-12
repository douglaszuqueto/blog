<?php

namespace App\Domains\Supporters\Database\Factories;

use App\Domains\Supporters\Entities\Supporters;
use App\Support\Database\ModelFactory;

class SupportersFactory extends ModelFactory
{

    protected $model = Supporters::class;

    /**
     * @return array
     */
    protected function fields()
    {

        return [
            'supporter' => $this->faker->name,
            'url' => $this->faker->url,
            'image' => $this->faker->url,
            'state' => 1,
        ];
    }
}