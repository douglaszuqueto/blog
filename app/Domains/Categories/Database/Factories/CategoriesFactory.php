<?php

namespace App\Domains\Categories\Database\Factories;

use App\Domains\Categories\Entities\Categories;
use App\Support\Database\ModelFactory;

class CategoriesFactory extends ModelFactory
{

    protected $model = Categories::class;

    /**
     * @return array
     */
    protected function fields()
    {

        return [
            'category' => $this->faker->name,
            'state' => 1,
        ];
    }
}