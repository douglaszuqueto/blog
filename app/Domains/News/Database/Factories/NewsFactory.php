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
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}