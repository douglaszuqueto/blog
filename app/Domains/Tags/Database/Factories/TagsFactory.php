<?php

namespace App\Domains\Tags\Database\Factories;

use App\Domains\Tags\Entities\Tags;
use App\Support\Database\ModelFactory;

class TagsFactory extends ModelFactory
{

    protected $model = Tags::class;

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