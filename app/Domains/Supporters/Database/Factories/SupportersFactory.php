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
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}