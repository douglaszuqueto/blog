<?php

namespace App\Domains\Sponsors\Database\Factories;

use App\Domains\Sponsorss\Entities\Sponsors;
use App\Support\Database\ModelFactory;

class SponsorsFactory extends ModelFactory
{

    protected $model = Sponsors::class;

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