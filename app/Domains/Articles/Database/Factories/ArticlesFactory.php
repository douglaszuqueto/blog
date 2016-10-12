<?php

namespace App\Domains\Articles\Database\Factories;

use App\Domains\Articles\Entities\Articles;
use App\Support\Database\ModelFactory;

class ArticlesFactory extends ModelFactory
{

    protected $model = Articles::class;

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