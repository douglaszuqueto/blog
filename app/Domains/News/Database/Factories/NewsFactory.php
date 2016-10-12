<?php

namespace App\Domains\News\Database\Factories;

use App\Domains\Newss\Entities\News;
use App\Support\Database\ModelFactory;

class NewsFactory extends ModelFactory
{

    protected $model = News::class;

    /**
     * @return array
     */
    protected function fields()
    {

        return [
            'title' => $this->faker->title,
            'url' => $this->faker->url,
        ];
    }
}