<?php

namespace App\Domains\Contact\Database\Factories;

use App\Domains\Contact\Entities\Contact;
use App\Support\Database\ModelFactory;

class ContactFactory extends ModelFactory
{

    protected $model = Contact::class;

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